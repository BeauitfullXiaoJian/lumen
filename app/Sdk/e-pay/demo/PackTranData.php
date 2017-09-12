<?php

require 'IcbcB2CUtil.php';
require 'EbizSign.php';

class PackTranData {
	
	/**
	 * ����tranData
	 * @param tranData
	 * @return
	 */
	public static function packTranData06($tranData,$orderEntity){
		$orderInfo = $tranData->setOrderInfo();
		$orderInfo->perpareData_OrderInfo($orderEntity);







			//�ӿ�����
	      if (strcmp("ICBC_WAPB_B2C",($tranData->getInterfaceName()))!=0){
	    	  echo "���󣺽ӿ����Ʋ���ȷ��ȡֵ����ΪICBC_WAPB_B2C".PHP_EOL;
	    	  return NULL;
	      }
			//�ӿں�
	      if (strcmp("1.0.0.6",($tranData->getInterfaceVersion()))!=0){
	    	  echo "���󣺽ӿڰ汾�Ų���ȷ��ȡֵ����Ϊ1.0.0.6".PHP_EOL;
	    	  return NULL;
	      }

			// ������Ϣ
	      if (strcmp("1.0.0.6",($tranData->getInterfaceVersion()))!=0)
	    	  
	    	if($orderInfo==NULL){
	    		echo "����̻����Ͷ�����Ϣ�Ƿ�Ϸ�����orderInfo==null".PHP_EOL;
		    	return NULL;
	    	}
	      	$amount = $orderInfo->getAmount();
            if (($amount == NULL) || (strlen(trim($amount))== 0)) {
            	echo "��������Ϊ��!".PHP_EOL;
                return NULL;
            }
            if (strstr($amount,'.')!=NULL) {
            	echo "��������Է�Ϊ��λ����Ӧ�ú���С���㡣amount=$amount".PHP_EOL;
                return NULL;
            }	
			
	    	//�ж��Ƿ���19-9�̻��˺�
			$merAcct = $orderInfo->getMerAcct();
			if($merAcct==NULL || (IcbcB2CUtil::merAcctCheck($merAcct))==-1){
				echo "�̳��˺�����merAcct=$merAcct".PHP_EOL;
		        return NULL;
			}
			// ����������־
			$verifyJoinFlag = $tranData->getVerifyJoinFlag();
			if ( $verifyJoinFlag==NULL || strcmp($verifyJoinFlag,'0')!=0) {
				echo "������־����verifyJoinFlag=$verifyJoinFlag".PHP_EOL;
		        return NULL;
			}
			// ���������������Ա�־
			if ($tranData->getLanguage() == NULL || strcmp($tranData->getLanguage(),"zh_CN")!=0) {
				echo "���ύ���Բ�������!".PHP_EOL;
				return NULL;
			}
			//�������˻���֧��ȫ���
			$isSafeSubAccount = "0";
			if(substr_compare($merAcct,"35",9,2) || substr_compare($merAcct,"38",9,2)){
				$isSafeSubAccount="1";
			}
			$installmentTimes = $orderInfo->getInstallmentTimes();
			if(strcmp($isSafeSubAccount,"1") && strcmp($installmentTimes,"1")!=0){
				echo "�̻����Ͷ�����Ϣ���󣬰������˻���֧���̻����ڡ� installmentTimes=$installmentTimes".PHP_EOL;
				return NULL;
			}
			// ���������ļ�飬ȡֵ��1��3��6��9��12��18��24��1����ȫ������Ϊ������ֵ�����򶩵�У�鲻ͨ����
			if((strlen($installmentTimes)==0) ||
			(
				strcmp($installmentTimes,"1")!=0  && 
				strcmp($installmentTimes,"3")!=0  &&
				strcmp($installmentTimes,"6")!=0  && 
				strcmp($installmentTimes,"9")!=0  &&
				strcmp($installmentTimes,"12")!=0 && 
				strcmp($installmentTimes,"18")!=0 &&
				strcmp($installmentTimes,"24")!=0
			)
			)
			{
				echo "�̻����Ͷ�����Ϣ�з��ڸ������������installmentTimes=$installmentTimes".PHP_EOL;
				return NULL;
			}
			
			
		// ����У�飬Ŀǰ�ӿ�ֻ֧�������001
			$curType = $orderInfo->getCurType();
			if (strcmp($curType,"001")!=0) {
				echo "�̻����Ͷ�����Ϣ�б��������curType=$curType".PHP_EOL;
				return NULL;
			}
			// �̻�֪ͨ��ַ
			$merURL = $tranData->getMerURL();
			if (($merURL == null) || strlen(trim($merURL)) == 0) {
				echo "�̻����Ͷ�����Ϣ��֪ͨ��ַ���Ϊ��".PHP_EOL;
				return NULL;
			}
			// ���֪ͨ��ַ		
			if(!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is',$merURL)){
				echo "�̻����Ͷ�����Ϣ��֪ͨ��ַ�����merURL=$merURL".PHP_EOL;
				return NULL;
			}

			//���֪ͨ����
			$notifyType = $tranData->getNotifyType();
			if (strcmp($notifyType,"HS")!=0 && strcmp($notifyType,"AG")!=0) {
				echo "�̻����Ͷ�����Ϣ��֪ͨ���ʹ��� notifyType=$notifyType".PHP_EOL;
				return NULL;
			}
			// ���֪ͨ����
			$resultType = $tranData->getResultType();
			if (strcmp($resultType,"0")!=0 && strcmp($resultType,"1")!=0) {
				echo "�̻����Ͷ�����Ϣ��֪ͨ������ʹ��� resultType=$resultType".PHP_EOL;
				return NULL;
			}
			// ��麬�˷ѽ���Ƿ���ϸ�ʽ
			$carriageAmt = $tranData->getCarriageAmt();
			if (($carriageAmt != NULL) && strcmp($carriageAmt,"")!=0) {
				if ($carriageAmt < 0) {
					echo "��Ч�ĺ��˷ѽ�carriageAmt=$carriageAmt".PHP_EOL;
					return NULL;
				}
			} else {
				echo "���˷ѽ�����������㡣carriageAmt=$carriageAmt".PHP_EOL;
				return NULL;
			}
			// ��鶩�������Ƿ���ϸ�ʽ
			$goodsNum = $tranData->getGoodsNum();
			if (($goodsNum != NULL) && (strcmp($goodsNum,""))!=0) {
				if ($goodsNum <= 0) {
					echo "����������������㡣goodsNum=$goodsNum".PHP_EOL;
					return NULL;
				}
			} else {
				echo "��Ч�Ķ���������goodsNum=$goodsNum".PHP_EOL;
				return NULL;
			}





			$xml ="<?xml version=\"1.0\" encoding=\"GBK\" standalone=\"no\"?>";
			$xml.="<B2CReq>";
			$xml.="<interfaceName>";
			$xml.=$tranData->getInterfaceName(); 
			$xml.="</interfaceName>";
		    $xml.="<interfaceVersion>"; 
			$xml.=$tranData->getInterfaceVersion(); 
			$xml.="</interfaceVersion>";
		    $xml.="<orderInfo>";
		    $xml.="<orderDate>";
			$xml.=$orderInfo->getOrderDate();
			$xml.="</orderDate>";
		    $xml.="<orderid>";
			$xml.=$orderInfo->getOrderid(); 
			$xml.="</orderid>";
		    $xml.="<amount>";
			$xml.=$orderInfo->getAmount();
			$xml.="</amount>";
		    $xml.="<installmentTimes>"; 
			$xml.=$orderInfo->getInstallmentTimes(); 
			$xml.="</installmentTimes>";
		    $xml.="<curType>"; 
			$xml.=$orderInfo->getCurType(); 
			$xml.="</curType>";
		    $xml.="<merID>"; 
			$xml.=$orderInfo->getMerID(); 
			$xml.="</merID>";
		    $xml.="<merAcct>"; 
			$xml.=$orderInfo->getMerAcct();
			$xml.="</merAcct>";
		    $xml.="</orderInfo>";
		    $xml.="<custom>";
		    $xml.="<verifyJoinFlag>"; 
			$xml.=$tranData->getVerifyJoinFlag(); 
			$xml.="</verifyJoinFlag>";
		    $xml.="<Language>"; 
			$xml.=$tranData->getLanguage();
			$xml.="</Language>";
		    $xml.="</custom>";
		    $xml.="<message>";
		    $xml.="<goodsID>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getGoodsID(), "");
			$xml.="</goodsID>";
		    $xml.="<goodsName>";
			$xml.=IcbcB2CUtil::judgeNull($tranData->getGoodsName(), ""); 
			$xml.="</goodsName>";
		    $xml.="<goodsNum>";
			$xml.=$tranData->getGoodsNum();
			$xml.="</goodsNum>";
		    $xml.="<carriageAmt>";
			$xml.=$tranData->getCarriageAmt();
			$xml.="</carriageAmt>";
		    $xml.="<merHint>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getMerHint(), ""); 
			$xml.="</merHint>";
		    $xml.="<remark1>";
			$xml.=IcbcB2CUtil::judgeNull($tranData->getRemark1(), ""); 
			$xml.="</remark1>";
		    $xml.="<remark2>";
			$xml.=IcbcB2CUtil::judgeNull($tranData->getRemark2(), "");
			$xml.="</remark2>";
		    $xml.="<merURL>";
			$xml.=$tranData->getMerURL(); 
			$xml.="</merURL>";
		    $xml.="<merVAR>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getMerVAR(), "");
			$xml.="</merVAR>";
		    $xml.="<notifyType>";
			$xml.=$tranData->getNotifyType(); 
			$xml.="</notifyType>";
		    $xml.="<resultType>";
			$xml.=$tranData->getResultType(); 
			$xml.="</resultType>";
		    $xml.="<backup1>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getBackup1(), ""); 
			$xml.="</backup1>";
		    $xml.="<backup2>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getBackup2(), "");
			$xml.="</backup2>";
		    $xml.="<backup3>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getBackup3(), ""); 
			$xml.="</backup3>";
		    $xml.="<backup4>"; 
			$xml.=IcbcB2CUtil::judgeNull($tranData->getBackup4(), ""); 
			$xml.="</backup4>";
		    $xml.="</message>";
		    $xml.="</B2CReq>";
			 
		return $xml;
	}
	
	/**
	 * ����̻����Ͷ�����Ϣ�Ƿ�Ϸ�
	 * @return
	 */
	public static function verifyOrderData($orderEntity){
		if($orderEntity==NULL){
			echo "����̻����Ͷ�����Ϣ�Ƿ�Ϸ�����orderEntity==null".PHP_EOL;
			return NULL;
		}
			
			//����������Ƿ�Ϊ�գ������Ƿ��ޡ�
			$CheckNames0 = array("interfaceName", "interfaceVersion", "orderid", "amount", "curType", "merID", "merAcct", "orderDate", "installmentTimes", "verifyJoinFlag", "notifyType" );
			$CheckValue0 = array($orderEntity->getInterfaceName(),$orderEntity->getInterfaceVersion(),$orderEntity->getOrderid(),$orderEntity->getAmount(),
								$orderEntity->getCurType(),$orderEntity->getMerID(),$orderEntity->getMerAcct(),$orderEntity->getOrderDate(),$orderEntity->getInstallmentTimes(),
								$orderEntity->getVerifyJoinFlag(),$orderEntity->getNotifyType()
							);
			$limit = array( 30, 15, 30, 10, 3, 20, 29, 14, 2, 1, 2 );
			$i=0;
			for ($i = 0; $i < count($CheckNames0); $i++) {
				$tmp = $CheckValue0[$i];
				if ($tmp == NULL || strlen($tmp)==0) {
					echo "�̻����Ͷ�����Ϣ��$CheckNames0[$i]���Ϊ�ա�".PHP_EOL;
					return NULL;
				} else if (($limit[$i] != -1) && (strlen($CheckValue0[$i]) > $limit[$i])) {
					echo "�̻����Ͷ�����Ϣ��$CheckNames0[$i]��ֵ������".PHP_EOL;
					return NULL;
				}
			}
			$CheckNames1 = array("goodsName", "goodsNum", "goodsID", "remark1", "remark2", "carriageAmt", "merHint", "merURL", "resultType", "backup1", "backup2", "backup3", "backup4" );
			$CheckValue1 = array($orderEntity->getGoodsName(),$orderEntity->getGoodsNum(),$orderEntity->getGoodsID(),$orderEntity->getRemark1(),$orderEntity->getRemark2(),
					$orderEntity->getCarriageAmt(),$orderEntity->getMerHint(),$orderEntity->getMerURL(),$orderEntity->getResultType(),
					$orderEntity->getBackup1(),$orderEntity->getBackup2(),$orderEntity->getBackup3(),$orderEntity->getBackup4());
			$limit2 = array( 60, 10, 10, 100, 100, 10, 40, 1024, 1, 2000, 1000, 1000, 1000 );
			$i=0;
			for ($i = 0; $i < count($CheckNames1); $i++) {
				$tmp = $CheckValue1[$i];
				if ($tmp == NULL) {
					
				} else if (strlen($CheckValue1[$i]) > $limit2[$i]) {
					echo "�̻����Ͷ�����Ϣ��$CheckNames1[$i]��ֵ������".PHP_EOL;
					return NULL;
				}
			}
			
			$userCrt = $orderEntity->getUserCrt();			
			if($userCrt==NULL || strlen($userCrt)<1){
				echo "�̻����Ͷ�����Ϣ�У��̳ǹ�ԿuserCrt����Ϊ�ա�".PHP_EOL;
				return NULL;
			}
			$userKey = $orderEntity->getUserKey();			
			if($userKey==NULL || strlen($userKey)<1){
				echo "�̻����Ͷ�����Ϣ�У��̳�˽ԿuserKey����Ϊ�ա�".PHP_EOL;
				return NULL;
			}
			$userKeyPassword = $orderEntity->getUserKeyPassword();	
			if($userKeyPassword==NULL || strlen($userKeyPassword)<1){
				echo "�̻����Ͷ�����Ϣ�У��̳�˽Կ����$userKeyPassword����Ϊ��".PHP_EOL;
				return NULL;
			}
			$apiQueryHost = $orderEntity->getApiQueryHost();			
			if (($apiQueryHost == NULL) || (strlen(trim($apiQueryHost)) == 0)) {
				echo "�̻����Ͷ�����Ϣ�У������ַapiQueryHost����Ϊ�ա�".PHP_EOL;
				return NULL;
			}
			$apiQueryHostPort = $orderEntity->getApiQueryHostPort();	
			if($apiQueryHostPort!=NULL && strcmp($apiQueryHostPort,"")!=0){
				if(IcbcB2CUtil::checkNum($apiQueryHostPort)==-1){
					echo "�̻����Ͷ�����Ϣ�������ַ�˿�apiQueryHostPort����apiQueryHostPort=$apiQueryHostPort".PHP_EOL;
					return NULL;
				}
			}
			return 0;
	
	}	
	
	/**
	 * ����tranData
	 * @param tranData
	 * @return
	 */
	public static function packTranData11($tranData,$orderEntity){
		$orderInfo = $tranData->setOrderInfo();
        $orderInfo->perpareData_OrderInfo($orderEntity);
		
		  // �ӿ�����
		if (strcmp("ICBC_WAPB_B2C",($tranData->getInterfaceName()))!=0){
	    	  echo "���󣺽ӿ����Ʋ���ȷ��ȡֵ����ΪICBC_WAPB_B2C".PHP_EOL;
	    	  return NULL;
	      }
	     // �ӿں�
	      if (strcmp("1.0.0.11",($tranData->getInterfaceVersion()))!=0){
	    	  echo "���󣺽ӿڰ汾�Ų���ȷ��ȡֵ����Ϊ1.0.0.11".PHP_EOL;
	    	  return NULL;
	      }
		  
		  
	      	$amount = $orderInfo->getAmount();
            if (($amount == NULL) || (strlen(trim($amount))== 0)) {
            	echo "��������Ϊ��!".PHP_EOL;
                return NULL;
            }

            if (strstr($amount,".")!=NULL) {
            	echo "��������Է�Ϊ��λ����Ӧ�ú���С���㡣amount=$amount".PHP_EOL;
                return NULL;
            }	
	      
	   
			// ����������־
			$verifyJoinFlag = $tranData->getVerifyJoinFlag();
			if ( $verifyJoinFlag==NULL || strcmp($verifyJoinFlag,'0')!=0) {
				echo "������־����verifyJoinFlag=$verifyJoinFlag".PHP_EOL;
		        return NULL;
			}
			// ���������������Ա�־
			if ($tranData->getLanguage() == NULL || strcmp($tranData->getLanguage(),"zh_CN")!=0) {
				echo "���ύ���Բ�������!".PHP_EOL;
				return NULL;
			}
			// ���������ļ�飬ȡֵ��1��3��6��9��12��18��24��1����ȫ������Ϊ������ֵ�����򶩵�У�鲻ͨ����
			$installmentTimes = $orderInfo->getInstallmentTimes();
			if((strlen($installmentTimes)==0) ||
			(
				strcmp($installmentTimes,"1")!=0  && 
				strcmp($installmentTimes,"3")!=0  &&
				strcmp($installmentTimes,"6")!=0  && 
				strcmp($installmentTimes,"9")!=0  &&
				strcmp($installmentTimes,"12")!=0 && 
				strcmp($installmentTimes,"18")!=0 &&
				strcmp($installmentTimes,"24")!=0
			)
			)
			{
				echo "�̻����Ͷ�����Ϣ�з��ڸ������������ installmentTimes=$installmentTimes".PHP_EOL;
				return NULL;
			}
			//����У�飬Ŀǰ�ӿ�ֻ֧�������001
			$curType = $orderInfo->getCurType();
			if (strcmp($curType,"001")!=0) {
				echo "�̻����Ͷ�����Ϣ�б��������curType=$curType".PHP_EOL;
				return NULL;
			}
			// �̻�֪ͨ��ַ
			$merURL = $tranData->getMerURL();
			if (($merURL == null) || strlen(trim($merURL)) == 0) {
				echo "�̻����Ͷ�����Ϣ��֪ͨ��ַ���Ϊ�ա�".PHP_EOL;
				return NULL;
			}

			// ���֪ͨ��ַ	
			if(!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is',$merURL)){
				echo "�̻����Ͷ�����Ϣ��֪ͨ��ַ�����merURL=$merURL".PHP_EOL;
				return NULL;
			}
			
			
			// ���֪ͨ�������
			$resultType = $tranData->getResultType();
			if (strcmp($resultType,"0")!=0 && strcmp($resultType,"1")!=0) {
				echo "�̻����Ͷ�����Ϣ��֪ͨ������ʹ���resultType=$resultType".PHP_EOL;
				return NULL;
			}

			// ��麬�˷ѽ���Ƿ���ϸ�ʽ
			$carriageAmt = $tranData->getCarriageAmt();
			if (($carriageAmt != NULL) && strcmp($carriageAmt,"")!=0) {
				if ($carriageAmt < 0) {
					echo "���˷ѽ�����������㡣carriageAmt=$carriageAmt".PHP_EOL;
					return NULL;
				}
			} else {
				echo "��Ч�ĺ��˷ѽ�carriageAmt=$carriageAmt".PHP_EOL;
				return NULL;
			}
			// ��鶩�������Ƿ���ϸ�ʽ
			$goodsNum = $tranData->getGoodsNum();
			if (($goodsNum != NULL) && (strcmp($goodsNum,"")!=0)) {
				if ($goodsNum <= 0) {
					echo "����������������㡣goodsNum=$goodsNum".PHP_EOL;
					return NULL;
				}
			} else {
				echo "��Ч�Ķ���������goodsNum=$goodsNum".PHP_EOL;
				return NULL;
			}	
			
			$xml  = "<?xml version=\"1.0\" encoding=\"GBK\"  standalone=\"no\"?>";
			$xml .= "<B2CReq>";
			$xml .= "<interfaceName>ICBC_PERBANK_B2C</interfaceName>";
			$xml .= "<interfaceVersion>1.0.0.11</interfaceVersion>";
			$xml .= "<orderInfo>";
			$xml .= "<orderDate>";
			$xml .= $orderInfo->getOrderDate();
			$xml .= "</orderDate>";
			
			$xml .= "<curType>";
			$xml .= $orderInfo->getCurType();
			$xml .= "</curType>";
			
			$xml .= "<merID>";
			$xml .= $orderInfo->getMerID();
			$xml .= "</merID>";	
			
			$xml .= "<subOrderInfoList>";
			$xml .= "<subOrderInfo>";

			$xml .= "<orderid>";
			$xml .= $orderInfo->getOrderid();
			$xml .= "</orderid>";
			
			$xml .= "<amount>";
			$xml .= $orderInfo->getAmount();
			$xml .= "</amount>";
			
			$xml .= "<installmentTimes>";
			$xml .= $orderInfo->getInstallmentTimes();
			$xml .= "</installmentTimes>";	

			$xml .= "<merAcct>";
			$xml .= $orderInfo->getMerAcct();
			$xml .= "</merAcct>";

			$xml .= "<goodsID>";
			$xml .= $tranData->getGoodsID();
			$xml .= "</goodsID>";

			$xml .= "<goodsName>";
			$xml .= $tranData->getGoodsName();
			$xml .= "</goodsName>";

			$xml .= "<goodsNum>";
			$xml .= $tranData->getGoodsNum();
			$xml .= "</goodsNum>";

			$xml .= "<carriageAmt>";
			$xml .= $tranData->getCarriageAmt();
			$xml .= "</carriageAmt>";
			
			$xml .= "</subOrderInfo>";	
			$xml .= "</subOrderInfoList>";
			$xml .= "</orderInfo>";	
			
			$xml .= "<custom>";	

			$xml .= "<verifyJoinFlag>";
			$xml .= $tranData->getVerifyJoinFlag();
			$xml .= "</verifyJoinFlag>";

			$xml .= "<Language>";
			$xml .= $tranData->getLanguage();
			$xml .= "</Language>";	
			
			$xml .= "</custom>";
			
			$xml .= "<message>";	

			$xml .= "<creditType>";
			$xml .= $tranData->getCreditType();
			$xml .= "</creditType>";

			$xml .= "<notifyType>";
			$xml .= $tranData->getNotifyType();
			$xml .= "</notifyType>";	

			$xml .= "<resultType>";
			$xml .= $tranData->getResultType();
			$xml .= "</resultType>";
			
			$xml .= "<merReference>";
			$xml .= $tranData->getMerReference();
			$xml .= "</merReference>";

			$xml .= "<merCustomIp>";
			$xml .= $tranData->getMerCustomIp();
			$xml .= "</merCustomIp>";
			
			$xml .= "<goodsType>";
			$xml .= $tranData->getGoodsType();
			$xml .= "</goodsType>";

			$xml .= "<merCustomID>";
			$xml .= $tranData->getMerCustomID();
			$xml .= "</merCustomID>";	
			
			$xml .= "<merCustomPhone>";
			$xml .= $tranData->getMerCustomPhone();
			$xml .= "</merCustomPhone>";
			
			$xml .= "<goodsAddress>";
			$xml .= $tranData->getGoodsAddress();
			$xml .= "</goodsAddress>";

			$xml .= "<merOrderRemark>";
			$xml .= $tranData->getMerOrderRemark();
			$xml .= "</merOrderRemark>";
			
			$xml .= "<merHint>";
			$xml .= $tranData->getMerHint();
			$xml .= "</merHint>";

			$xml .= "<remark1>";
			$xml .= $tranData->getRemark1();
			$xml .= "</remark1>";

			$xml .= "<remark2>";
			$xml .= $tranData->getRemark2();
			$xml .= "</remark2>";

			$xml .= "<merURL>";
			$xml .= $tranData->getMerURL();
			$xml .= "</merURL>";

			$xml .= "<merVAR>";
			$xml .= $tranData->getMerVAR();
			$xml .= "</merVAR>";
			
			$xml .= "</message>";	
			
			$xml .= "<extend>";	

			$xml .= "<e_isMerFlag>";
			$xml .= $tranData->getE_isMerFlag();
			$xml .= "</e_isMerFlag>";

			$xml .= "<e_Name>";
			$xml .= $tranData->getE_Name();
			$xml .= "</e_Name>";	

			$xml .= "<e_TelNum>";
			$xml .= $tranData->getE_TelNum();
			$xml .= "</e_TelNum>";
			
			$xml .= "<e_CredType>";
			$xml .= $tranData->getE_CredType();
			$xml .= "</e_CredType>";

			$xml .= "<e_CredNum>";
			$xml .= $tranData->getE_CredNum();
			$xml .= "</e_CredNum>";

			$xml .= "<e_CardNo>";
			$xml .= $tranData->getE_CardNo();
			$xml .= "</e_CardNo>";

			$xml .= "<orderFlag_ztb>";
			$xml .= $tranData->getOrderFlag_ztb();
			$xml .= "</orderFlag_ztb>";	
			
			$xml .= "</extend>";	
			
			$xml .= "</B2CReq>";
			 
		return $xml;
	}
	
	/**
	 * ����̻����Ͷ�����Ϣ�Ƿ�Ϸ�
	 * @return
	 */
	public static function verifyOrderData11($orderEntity){
		if($orderEntity==NULL){
			echo "����̻����Ͷ�����Ϣ�Ƿ�Ϸ�����orderEntity==null".PHP_EOL;
			return NULL;
		}
			
			// ����������������?
			$CheckNames0 = array( "interfaceName", "interfaceVersion", "orderid", "amount", "curType", "merID", "merAcct", "orderDate", "installmentTimes", "verifyJoinFlag", "notifyType" );
			$CheckValue0 = array($orderEntity->getInterfaceName(),$orderEntity->getInterfaceVersion(),$orderEntity->getOrderid(),$orderEntity->getAmount(),
								$orderEntity->getCurType(),$orderEntity->getMerID(),$orderEntity->getMerAcct(),$orderEntity->getOrderDate(),$orderEntity->getInstallmentTimes(),
								$orderEntity->getVerifyJoinFlag(),$orderEntity->getNotifyType()
							);
			$limit = array( 30, 15, 30, 10, 3, 20, 29, 14, 2, 1, 2 );
			$i=0;
			for ($i = 0; $i < count($CheckNames0); $i++) {
				$tmp = $CheckValue0[$i];
				if ($tmp == NULL || strlen($tmp) == 0) {
					echo "�̻����Ͷ�����Ϣ��$CheckNames0[$i]���Ϊ�ա�".PHP_EOL;
					return NULL;
				} else if (($limit[$i] != -1) && (strlen($CheckValue0[$i])> $limit[$i])) {
					echo "�̻����Ͷ�����Ϣ��$CheckNames0[$i]��ֵ������".PHP_EOL;
					return NULL;
				}
			}
			$CheckNames1 = array( "goodsName", "goodsNum", "goodsID", "remark1", "remark2", "carriageAmt", "merHint", "merURL", "resultType");
			$CheckValue1 = array($orderEntity->getGoodsName(),$orderEntity->getGoodsNum(),$orderEntity->getGoodsID(),$orderEntity->getRemark1(),$orderEntity->getRemark2(),
					$orderEntity->getCarriageAmt(),$orderEntity->getMerHint(),$orderEntity->getMerURL(),$orderEntity->getResultType()
					);
			$limit2 = array( 60, 10, 10, 100, 100, 10, 40, 1024, 1);
			$i=0;
			for ($i = 0; $i < count($CheckNames1); $i++) {
				$tmp = $CheckValue1[$i];
				if ($tmp == NULL) {
					
				} else if (strlen($CheckValue1[$i]) > $limit2[$i]) {
					echo "�̻����Ͷ�����Ϣ��$CheckNames1[$i]��ֵ������".PHP_EOL;
					return NULL;
				}
			}
			
			$userCrt = $orderEntity->getUserCrt();							//����
			if($userCrt==NULL || strlen($userCrt)<1){
				echo "�̻����Ͷ�����Ϣ�У��̳ǹ�ԿuserCrt����Ϊ�ա�".PHP_EOL;
				return NULL;
			}
			$userKey = $orderEntity->getUserKey();							//����
			if($userKey==NULL || strlen($userKey)<1){
				echo "�̻����Ͷ�����Ϣ�У��̳�˽ԿuserKey����Ϊ�ա�".PHP_EOL;
				return NULL;
			}
			$userKeyPassword = $orderEntity->getUserKeyPassword();			//����
			if($userKeyPassword==NULL || strlen($userKeyPassword)<1){
				echo "�̻����Ͷ�����Ϣ�У��̳�˽Կ����userKeyPassword����Ϊ�ա�".PHP_EOL;
				return NULL;
			}
			$apiQueryHost = $orderEntity->getApiQueryHost();				//����
			if (($apiQueryHost == NULL) || (strlen(trim($apiQueryHost)) == 0)) {
				echo "�̻����Ͷ�����Ϣ�У������ַapiQueryHost����Ϊ�ա�".PHP_EOL;
				return NULL;
			}

			$apiQueryHostPort = $orderEntity->getApiQueryHostPort();		//���� 
			if($apiQueryHostPort!=NULL && strcmp($apiQueryHostPort,"")!=0){
				if(IcbcB2CUtil::checkNum($apiQueryHostPort)==-1){
					echo "�̻����Ͷ�����Ϣ�������ַ�˿�apiQueryHostPort����apiQueryHostPort=$apiQueryHostPort".PHP_EOL;
					return NULL;
				}
			}
			
		return NULL;
	}

	
}


?>
