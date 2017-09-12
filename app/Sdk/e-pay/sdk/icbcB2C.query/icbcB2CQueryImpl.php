<?php 
	require_once dirname(__FILE__)."/../icbcB2C.common/IcbcB2CUtil.php";
	require_once dirname(__FILE__)."/../icbcB2C.model/MerReqData.php";
	require_once dirname(__FILE__)."/../icbcB2C.model/MerResData.php";
	require_once dirname(__FILE__)."/../icbcB2C.model/B2cConfig.php";
	require_once dirname(__FILE__)."/../icbcB2C.query/icbcB2CQuery.php";
	
	require_once dirname(__FILE__).'/../log4PHP/log4PHP.php';	//������־�����ļ�
	/*
	 * <p>icbcB2CAPI��ѯ��</p>
	 * <br/>
	 *<p>�������ڰ������š��������ڲ�ѯ���嶩��״̬</P>
	 *@see <p>����������ϵͳ�̻�API��ѯ�ӿ��ֲ�V1.1��</p>
	 *@author ����ͩ
	 */
class IcbcB2CQueryImpl implements IcbcB2CQuery{
	/*
	 * <p>��װMerResData����</p>
	 * @param xmlDoc
	 * ���з��ص�B2CAPIxml���Ĵ�
	 * @return MerResData
	 * @throws Exception
	 */
	public function xmlElements($xmlDoc) {
		$logger = Log::getLogger(__CLASS__);
		
        $merResData = new MerResData();
        
        try {
        	$dom = new DOMDocument;
			$dom->loadXML($xmlDoc);
			$xml = simplexml_import_dom($dom);
			
			$merResData->setApiName(trim($xml->pub->APIName));
			$merResData->setApiVersion(trim($xml->pub->APIVersion));
			
			$merResData->setOrderNum(trim($xml->in->orderNum));
			$merResData->setTranDate(trim($xml->in->tranDate));
			$merResData->setShopCode(trim($xml->in->ShopCode));
			//$merResData->setShopAccount(trim($xml->in->ShopAccount));
			
			$merResData->setTranSerialNum(trim($xml->out->tranSerialNum));
			$merResData->setTranStat(trim($xml->out->tranStat));
			$merResData->setBankRem(trim($xml->out->bankRem));
			$merResData->setAmount(trim($xml->out->amount));
			$merResData->setCurrType(trim($xml->out->currType));
			$merResData->setTranTime(trim($xml->out->tranTime));
			$merResData->setShopAccount(trim($xml->out->ShopAccount));
			$merResData->setPayeeName(iconv("utf-8","gbk",trim($xml->out->PayeeName)));
			$merResData->setJoinFlag(trim($xml->out->JoinFlag));
			$merResData->setMerJoinFlag(trim($xml->out->MerJoinFlag));
			$merResData->setCustJoinFlag(trim($xml->out->CustJoinFlag));
			$merResData->setCustJoinNum(trim($xml->out->CustJoinNum));
			$merResData->setCertID(trim($xml->out->CertID));

        } catch (Exception $e) { 
            $logger->fatal($e->getMessage(), $e);
            return null;
        } 
        return $merResData; 
    }
    
	/*
	 * <p>��ѯICBCApi����</p>
	 * @param xmlPath
	 * �����ļ�·��
	 * @param merReqData
	 * ���ص����з��صĸ��ֳ�
	 * @return MerResData
	 * @throws Exception
	 */
	public function getICBCApiData($xmlPath, $merReqData){
		$logger = Log::getLogger(__CLASS__);
		$merResData = null;		//��ѯ����ֵ
		try{
			$b2cConfig = IcbcB2CUtil::loadXML($xmlPath);
			//����POST����
			$data = "APIName=EAPI".
					"&APIVersion=001.001.002.001".
					"&MerReqData=<?xml version=\"1.0\" encoding=\"GBK\" standalone=\"no\" ?>".
						"<ICBCAPI><in><orderNum>".trim($merReqData->getOrderNum())."</orderNum>".
						"<tranDate>".trim($merReqData->getTranDate())."</tranDate>".
						"<ShopCode>".trim($merReqData->getShopCode())."</ShopCode>".
						"<ShopAccount>".trim($merReqData->getShopAccount())."</ShopAccount></in></ICBCAPI>";
			$logger->info("���Ͳ�ѯ�����ݣ�".$data);
			$curl = curl_init();		//��ʼ��curl���
			curl_setopt($curl, CURLOPT_URL, $b2cConfig->getApiQueryHost());		//��������
			curl_setopt($curl, CURLOPT_PORT, $b2cConfig->getApiQueryHostPort());		//���ö˿ں�	
			//��������SSL֤�����Ƿ����һ������������鹫�����Ƿ���ڣ������Ƿ�����ṩ��������ƥ��
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);		//����֤��������	
			curl_setopt($curl, CURLOPT_SSLCERT, $b2cConfig->getPemPath());		//PEM��ʽ�̻�֤��
			curl_setopt($curl, CURLOPT_SSLCERTPASSWD, $b2cConfig->getPassword());
			curl_setopt($curl, CURLOPT_POST, TRUE);		//POST����
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);		//POST����
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);		//����ȡ��Ϣ���ļ�����ʽ���أ�������ֱ�����
			$returnInfo = urldecode(curl_exec($curl)); 	//ִ�в���������url����		
			if(curl_errno($curl)){
				$logger->info("cURL������룺".curl_errno($curl));
				return null;
			}
			curl_close($curl);		//�رվ�����ͷ���Դ	
			
			if(IcbcB2CUtil::checkNum($returnInfo))		//���ش������
			{
				$logger->error("֧��ָ���ѯ����������룺".$returnInfo);
				return null;
			}
			else
			{
				$logger->error("֧��ָ���ѯ����ֵ��".$returnInfo);
				$merResData = self::xmlElements($returnInfo);
			}																	
		}
		catch (Exception $e) {			
			$logger->fatal($e->getMessage(), $e);
		}
		return $merResData;
	}
}
?>