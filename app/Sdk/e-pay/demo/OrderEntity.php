<?php

class OrderEntity {
	public $INTERFACE_NAME = "interfaceName"; 
	public $INTERFACE_VERSION = "interfaceVersion"; 
	public $ORDER_DATE = "orderDate";
	public $ORDER_ID = "orderid";
	public $AMOUNT = "amount";
	public $INSTALLMENT_TIMES = "installmentTimes";
	public $CUR_TYPE = "curType";
	public $MER_ID = "merID";
	public $MER_ACCT = "merAcct";
	public $VERIFY_JOIN_FLAG = "verifyJoinFlag";
	public $LANGUAGE = "Language";
	public $GOODS_ID = "goodsID";
	public $GOODS_NAME = "goodsName";
	public $GOODS_NUM = "goodsNum";
	public $CARRIAGE_AMT = "carriageAmt";
	public $MER_HINT = "merHint";
	public $REMARK1 = "remark1";
	public $REMARK2 = "remark2";
	public $MER_URL = "merURL";
	public $MER_VAR = "merVAR";
	public $NOTIFY_TYPE = "notifyType";
	public $RESULT_TYPE = "resultType";
	public $BACKUP1 = "backup1";				
	public $BACKUP2 = "backup2";			
	public $BACKUP3 = "backup3";			
	public $BACKUP4 = "backup4";		

	public $USER_CRTPATH = "userCrtPath"; 
	public $USER_KEYPATH = "userKeyPath"; 
	public $USER_KEYPASSWORD = "userKeyPassword"; 
	public $API_QUERY_HOST = "apiQueryHost"; 
	public $API_QUERY_HOST_PORT = "apiQueryHostPort";
	
	private  $interfaceName="ICBC_WAPB_B2C";		//�ӿ�����	
	private  $interfaceVersion="1.0.0.6";			//�ӿڰ汾��
	private  $orderDate="20170222145551";			//�������ڣ���ʽyyyyMMddHHmmss
	private  $orderid="8113361";					//������
	private  $amount="1234";						//�������
	private  $installmentTimes="1";					//��������
	private  $curType="001";						//����
	private  $merID="0200EG0000025";				//�̳Ǵ���		
	private  $merAcct="6225000124455884124";		//�̳��˺�
	private  $verifyJoinFlag="0";					//����У���־
	private  $Language="zh_CN";						//����
	private  $goodsID="10000312";					//��ƷID
	private  $goodsName="1";						//��Ʒ����
	private  $goodsNum="1";							//��Ʒ����
	private  $carriageAmt="0";						//�˷�
	private  $merHint="shang cheng zhan shi";		//�̳���ʾ
	private  $remark1="";							//��ע1
	private  $remark2="";							//��ע2
	private  $merURL="http://122.19.141.83/emulator/notifyBack_mer.jsp";//�̳�֪ͨ��ַ
	private  $merVAR="beizhu";						//�̳Ǳ�ע
	private  $notifyType="HS";						//֪ͨ����
	private  $resultType="0";						//֪ͨ�������
	private  $backup1="";							//����1
	private  $backup2="";							//����2
	private  $backup3="";							//����3
	private  $backup4="";							//����4
	private  $userCrt;								//��Կ����
	private  $userKey;								//˽Կ����
	private  $userCrtPath="./cert/2.cer";			//��Կ��ַ
	private  $userKeyPath="./cert/2.key";			//˽Կ��ַ
	private  $userKeyPassword="1";					//֤������
	private  $apiQueryHost="122.16.173.77";			//�����ַ
	private  $apiQueryHostPort="11452";				//����˿�
	


	
	public function getUserKeyPassword() {
		return $this->userKeyPassword;
	}
	private function setUserKeyPassword($userKeyPassword) {
		$this->userKeyPassword = $userKeyPassword;
	}
	public function getApiQueryHost() {
		return $this->apiQueryHost;
	}
	private function setApiQueryHost($apiQueryHost) {
		$this->apiQueryHost = $apiQueryHost;
	}
	public function getApiQueryHostPort() {
		return $this->apiQueryHostPort;
	}
	private function setApiQueryHostPort($apiQueryHostPort) {
		$this->apiQueryHostPort = $apiQueryHostPort;
	}
	public function getInterfaceName() {
		return $this->interfaceName;
	}
	private function setInterfaceName($interfaceName) {
		$this->interfaceName = $interfaceName;
	}
	public function getInterfaceVersion() {
		return $this->interfaceVersion;
	}
	private function setInterfaceVersion($interfaceVersion) {
		$this->interfaceVersion = $interfaceVersion;
	}
	public function getOrderDate() {
		return $this->orderDate;
	}
	public function setOrderDate($orderDate) {
		$this->orderDate = $orderDate;
	}
	public function getOrderid() {
		return $this->orderid;
	}
	private function setOrderid($orderid) {
		$this->rderid = $orderid;
	}
	public function getAmount() {
		return $this->amount;
	}
	private function setAmount($amount) {
		$this->amount = $amount;
	}
	public function getInstallmentTimes() {
		return $this->installmentTimes;
	}
	private function setInstallmentTimes($installmentTimes) {
		$this->installmentTimes = $installmentTimes;
	}
	public function getCurType() {
		return $this->curType;
	}
	private function setCurType($curType) {
		$this->curType = $curType;
	}
	public function getMerID() {
		return $this->merID;
	}
	private function setMerID($merID) {
		$this->merID = $merID;
	}
	public function getMerAcct() {
		return $this->merAcct;
	}
	private function setMerAcct($merAcct) {
		$this->merAcct = $merAcct;
	}
	public function getVerifyJoinFlag() {
		return $this->verifyJoinFlag;
	}
	private function setVerifyJoinFlag($verifyJoinFlag) {
		$this->verifyJoinFlag = $verifyJoinFlag;
	}
	public function getLanguage() {
		return $this->Language;
	}
	private function setLanguage($language) {
		$this->Language = $language;
	}
	public function getGoodsID() {
		return $this->goodsID;
	}
	private function setGoodsID($goodsID) {
		$this->goodsID = $goodsID;
	}
	public function getGoodsName() {
		return $this->goodsName;
	}
	private function setGoodsName($goodsName) {
		$this->goodsName = $goodsName;
	}
	public function getGoodsNum() {
		return $this->goodsNum;
	}
	private function setGoodsNum($goodsNum) {
		$this->goodsNum = $goodsNum;
	}
	public function getCarriageAmt() {
		return $this->carriageAmt;
	}
	private function setCarriageAmt($carriageAmt) {
		$this->carriageAmt = $carriageAmt;
	}
	public function getMerHint() {
		return $this->merHint;
	}
	private function setMerHint($merHint) {
		$this->merHint = $merHint;
	}
	public function getRemark1() {
		return $this->remark1;
	}
	private function setRemark1($remark1) {
		$this->remark1 = $remark1;
	}
	public function getRemark2() {
		return $this->remark2;
	}
	private function setRemark2($remark2) {
		$this->remark2 = $remark2;
	}
	public function getMerURL() {
		return $this->merURL;
	}
	private function setMerURL($merURL) {
		$this->merURL = $merURL;
	}
	public function getMerVAR() {
		return $this->merVAR;
	}
	private function setMerVAR($merVAR) {
		$this->merVAR = $merVAR;
	}
	public function getNotifyType() {
		return $this->notifyType;
	}
	private function setNotifyType($notifyType) {
		$this->notifyType = $notifyType;
	}
	public function getResultType() {
		return $this->resultType;
	}
	private function setResultType($resultType) {
		$this->resultType = $resultType;
	}
	public function getBackup1() {
		return $this->backup1;
	}
	private function setBackup1($backup1) {
		$this->backup1 = $backup1;
	}
	public function getBackup2() {
		return $this->backup2;
	}
	private function setBackup2($backup2) {
		$this->backup2 = $backup2;
	}
	public function getBackup3() {
		return $this->backup3;
	}
	private function setBackup3($backup3) {
		$this->backup3 = $backup3;
	}
	public function getBackup4() {
		return $this->backup4;
	}
	private function setBackup4($backup4) {
		$this->backup4 = $backup4;
	}
	public function getUserCrt() {
		return $this->userCrt;
	}
	public function setUserCrt($userCrt) {
		$this->userCrt = $userCrt;
	}
	public function getUserKey() {
		return $this->userKey;
	}
	public function setUserKey($userKey) {
		$this->userKey = $userKey;
	}
	public function getUserCrtPath() {
		return $this->userCrtPath;
	}
	public function getUserKeyPath() {
		return $this->userKeyPath;
	}
	private function setUserCrtPath($userCrtPath) {
		$this->userCrtPath = $userCrtPath;
	}
	private function setUserKeyPath($userKeyPath) {
		$this->userKeyPath = $userKeyPath;
	}
	


	public function set($property_name,$property_value)
	{
	$name=$this->$property_name;
	$this->$name= $property_value;
	}

	public function __get($property_name)
	{
		if(isset($this->property_name))
		{
		return $this->property_name;
		}else{
		return NULL;
		}
	}

	public function	perpareData(){
		$this->setUserCrtPath($this->getUserCrtPath());				//��Կ����
		$this->setUserKeyPath($this->getUserKeyPath());				//˽Կ����
		$this->setUserKeyPassword($this->getUserKeyPassword());		//֤������
		$this->setApiQueryHost($this->getApiQueryHost());			//�����ַ
		$this->setApiQueryHostPort($this->getApiQueryHostPort());	//����˿�
		
		$this->setOrderDate($this->getOrderDate());					//�������ڣ���ʽyyyyMMddHHmmss
		$this->setOrderid($this->getOrderid());						//������
		$this->setAmount($this->getAmount());						//�������
		$this->setInstallmentTimes($this->getInstallmentTimes());	//��������
		$this->setMerAcct($this->getMerAcct());						//�̳��˺�
		$this->setGoodsID($this->getGoodsID());						//��ƷID
		$this->setGoodsName($this->getGoodsName());					//��Ʒ����
		$this->setGoodsNum($this->getGoodsNum());					//��Ʒ����
		$this->setCarriageAmt($this->getCarriageAmt());				//�˷�
		$this->setVerifyJoinFlag($this->getVerifyJoinFlag());		//����У���־
		$this->setLanguage($this->getLanguage());					//����
		$this->setCurType($this->getCurType());						//����
		$this->setMerID($this->getMerID());							//�̳Ǵ���	
		$this->setNotifyType($this->getNotifyType());				//֪ͨ����
		$this->setResultType($this->getResultType());				//֪ͨ�������
		$this->setMerHint($this->getMerHint());						//�̳���ʾ
		$this->setRemark1($this->getRemark1());						//��ע1
		$this->setRemark2($this->getRemark2());						//��ע2
		$this->setMerURL($this->getMerURL());						//�̳�֪ͨ��ַ
		$this->setMerVAR($this->getMerVAR());						//�̳Ǳ�ע

		$this->setBackup1($this->getBackup1());				
		$this->setBackup2($this->getBackup2());
		$this->setBackup3($this->getBackup3());
		$this->setBackup4($this->getBackup4());
	}
}
?>
