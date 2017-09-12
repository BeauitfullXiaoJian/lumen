<?php 
	require_once dirname(__FILE__).'/../icbcB2C.common/IcbcB2CUtil.php';
	require_once dirname(__FILE__).'/../icbcB2C.errorInfo/ErrBean.php';
	require_once dirname(__FILE__).'/../icbcB2C.model/B2cConfig.php';
	require_once dirname(__FILE__).'/../icbcB2C.model/NotifyData.php';
	require_once dirname(__FILE__).'/../icbcB2C.model/NotifyOrderInfo.php';
	require_once dirname(__FILE__).'/../icbcB2C.notify/IcbcB2CNotify.php';

	require_once dirname(__FILE__).'/../log4PHP/log4PHP.php';
	require_once dirname(__FILE__).'/../icbcB2C.includes/javaBridge.php';

	
/*
 * <p>icbcB2C���չ���֪ͨ��Ϣ��</p>
 * <br/>
 *<p>�������ڽ����յ��Ĺ���֪ͨ��Ϣ���Ĵ���ǩ���ܣ������̻���Ҫ��֪ͨ��Ϣ����</P>
 *@see <p>���й�������������������B2C����֧���ӿ�˵��V1.0.0.11��</p>
 */
class IcbcB2CNotifyImpl implements IcbcB2CNotify {
	
	/*
	 * <p>����֪ͨ�ӿ���Ϣ</p>
	 * @param notifyData
	 * base64���������֪ͨ��Ϣ
	 * @param signMsg
	 * ��notifyData��ǩ������base64����Ľ��
	 * @param xmlPath
	 * �����ļ����·��
	 * @return notifyData
	 * @throws Exception
	 */	
	public function createNotifyData($notifyData, $signMsg, $xmlPath){ 
		$logger = Log::getLogger(__CLASS__);
		try {
			$b2cConfig = IcbcB2CUtil::loadXML($xmlPath);
			if($b2cConfig != null)
			{
				//ȡ����֤��
				$publicCrtPath = $b2cConfig->getPublicCrtPath();
				$logger->info("����֤����·��:".$publicCrtPath);
				//byte��ʽ��ȡ����֤��				
				$bcert = ReadBytesFile::readFile($publicCrtPath);
				//byte��ʽ��ȡsignMsg
				$byteSignMsg = Bytes::getBytes(urldecode($signMsg));
				//��ʼ��ReturnValue
				$ReturnValue = new Java("cn.com.infosec.icbc.ReturnValue");
				$DecSignMsg = $ReturnValue->base64dec($byteSignMsg);
				if($DecSignMsg == null)
				{
					$logger->error(ErrBean::$const_Err_DecSignMsg);
					return null;
				}
				$byteNotifyData = Bytes::getBytes(urldecode($notifyData));
				$DecNotifyData = $ReturnValue->base64dec($byteNotifyData);
				if($DecNotifyData == null)
				{
					$logger->error(ErrBean::$const_Err_DesNotify);
					return null;
				}
				
				$logger->info("���ж�֪ͨ�����ǩ�����ݣ�" . urldecode($signMsg));
				
				$result = java_values($ReturnValue->verifySign($DecNotifyData, count($DecNotifyData), $bcert, $DecSignMsg));		
				if($result == 0)//��ǩ�ɹ�
				{	
					$DecNotifyData1 = base64_decode(urldecode($notifyData));
					$logger->info("base64����SignMsg��" . $DecNotifyData1);
					$nd = self::xmlElements($DecNotifyData1);
					$logger->info("��ǩ�ɹ���");
				}
				else
				{
					$logger->error("��ǩʧ�ܣ�");	
					return null;
				}			
			}
			else
			{
				$logger->error(ErrBean::$const_Err_Config);
				return null;
			}	
		} catch (Exception $e) {
			$logger->fatal($e->getMessage(), $e);
			return null;
		}
        return $nd; 
    } 
	
	/*
	 * <p>��xml�ַ���������notifyData</p>
	 * @param xmlDoc
	 * notifyData��xml�ַ���
	 * @return notifyData 
	 * @throws Exception
	 */
	public function xmlElements($xmlDoc) { 
        
		$notifyData = new NotifyData();
        try { 
        	//��ȡnotify����xml��
        	$notifyData->setNotifyData($xmlDoc);
        	$dom = new DOMDocument;
			$dom->loadXML($xmlDoc);
			$xml = simplexml_import_dom($dom);
			//ȡinterfaceName...
			$notifyData->setInterfaceName(trim($xml->interfaceName));
			$notifyData->setInterfaceVersion(trim($xml->interfaceVersion));
			$notifyData->setOrderDate(trim($xml->orderInfo->orderDate));
			$notifyData->setCurType(trim($xml->orderInfo->curType));
			$notifyData->setMerID(trim($xml->orderInfo->merID));
			$notifyData->setVerifyJoinFlag(trim($xml->custom->verifyJoinFlag));
			$notifyData->setJoinFlag(trim($xml->custom->JoinFlag));
			$notifyData->setUserNum(trim($xml->custom->UserNum));
			$notifyData->setTranBatchNo(trim($xml->bank->TranBatchNo));
			$notifyData->setNotifyDate(trim($xml->bank->notifyDate));
			$notifyData->setTranStat(trim($xml->bank->tranStat));
			$notifyData->setComment(iconv("utf-8", "gbk", trim($xml->bank->comment)));
			$orderInfoList = array();
			foreach ($xml->orderInfo->subOrderInfoList->subOrderInfo as $subOrderInfo){
				$notifyOrderInfo = new NotifyOrderInfo();
				$notifyOrderInfo->setOrderid(trim($subOrderInfo->orderid));
				$notifyOrderInfo->setAmount(trim($subOrderInfo->amount));
				$notifyOrderInfo->setInstallmentTimes(trim($subOrderInfo->installmentTimes));
				$notifyOrderInfo->setMerAcct(trim($subOrderInfo->merAcct));
				$notifyOrderInfo->setTranSerialNo(trim($subOrderInfo->tranSerialNo));
				$orderInfoList[] = $notifyOrderInfo;
			}
			$notifyData->setSubOrderInfoList($orderInfoList);
            
        } catch (Exception $e) { 
            $logger->fatal($e->getMessage(), $e);
            return null;
        }
        return $notifyData; 
    } 
}
?>