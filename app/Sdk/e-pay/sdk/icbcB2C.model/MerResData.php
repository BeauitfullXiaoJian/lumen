<?php 
	/*
	 * <p>icbcB2C���з��ز�ѯ��Ϣ��</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������icbcB2C���з��ز�ѯ��Ϣ��ķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@see <p>����������ϵͳ�̻�API��ѯ�ӿ��ֲ�V1.1��</p>
	 *@author ����ͩ
	 */
class MerResData {
	
	private $apiName;
	
	private $apiVersion;
	
	private $orderNum;
	
	private $tranDate;
	
	private $shopCode;
	
	private $shopAccount;
	
	private $tranSerialNum;
	
	private $tranStat;
	
	private $bankRem;
	
	private $amount;
	
	private $currType;
	
	private $tranTime;
	
	private $payeeName;
	
	private $joinFlag;
	
	private $merJoinFlag;
	
	private $custJoinFlag;
	
	private $custJoinNum;
	
	private $certID;
	
	 /*
	  * <p>��ȡ�ӿ�����</p>
	  * @return String
	  * ����ֵΪ���з��ص�API��ѯ�ӿ�����
	  */
	public function getApiName() {
		return $this->apiName;
	}
	
	/*
	 * <p>���ýӿ�����</p>
	 * @param name
	 * �ӿ����� 
	 */
	public function setApiName($name) {
		$this->apiName = $name;
	}
	
	 /*
	  * <p>��ȡ�ӿڰ汾��</p>
	  * @return String
	  * ����ֵΪ���з��ص�API��ѯ�ӿڰ汾��
	  */
	public function getApiVersion() {
		return $this->apiVersion;
	}
	
	/*
	 * <p>���ýӿڰ汾��</p>
	 * @param version
	 * �ӿڰ汾��
	 */
	public function setApiVersion($version) {
		$this->apiVersion = $version;
	}
	
	 /*
	  * <p>��ȡ������</p>
	  * @return String
	  * ����ֵΪ���з��صĶ�����
	  */
	public function getOrderNum() {
		return $this->orderNum;
	}
	
	/*
	 * <p>���ö�����</p>
	 * @param orderNum
	 * ������
	 */
	public function setOrderNum($orderNum) {
		$this->orderNum = $orderNum;
	}
	
	 /*
	  * <p>��ȡ��������</p>
	  * @return String
	  * ����ֵΪ���з��صĽ�������
	  */
	public function getTranDate() {
		return $this->tranDate;
	}
	
	/*
	 * <p>���ý�������</p>
	 * @param tranDate
	 * ��������
	 */
	public function setTranDate($tranDate) {
		$this->tranDate = $tranDate;
	}
	
	 /*
	  * <p>��ȡ�̼Һ���</p>
	  * @return String
	  * ����ֵΪ���з��ص��̼Һ���
	  */
	public function getShopCode() {
		return $this->shopCode;
	}
	
	/*
	 * <p>�����̼Һ���</p>
	 * @param shopCode
	 * �̼Һ���
	 */
	public function setShopCode($shopCode) {
		$this->shopCode = $shopCode;
	}
	
	 /*
	  * <p>��ȡ�̳��˺�</p>
	  * @return String
	  * ����ֵΪ���з��ص��̳��˺�
	  */
	public function getShopAccount() {
		return $this->shopAccount;
	}
	
	/*
	 * <p>�����̳��˺�</p>
	 * @param shopAccount
	 * �̳��˺� 
	 */
	public function setShopAccount($shopAccount) {
		$this->shopAccount = $shopAccount;
	}
	
	 /*
	  * <p>��ȡָ�����</p>
	  * @return String
	  * ����ֵΪ���з��ص�ָ�����
	  */
	public function getTranSerialNum() {
		return $this->tranSerialNum;
	}
	
	/*
	 * <p>����ָ�����</p>
	 * @param tranSerialNum
	 * ָ�����
	 
	 */
	public function setTranSerialNum($tranSerialNum) {
		$this->tranSerialNum = $tranSerialNum;
	}
	
	/*
	  * <p>��ȡ��������״̬</p>
	  * @return String
	  * ����ֵΪ���з��صĶ�������״̬
	  */
	public function getTranStat() {
		return $this->tranStat;
	}
	
	/*
	 * <p>���ö�������״̬</p>
	 * @param tranStat
	 * ��������״̬
	 */
	public function setTranStat($tranStat) {
		$this->tranStat = $tranStat;
	}
	
	/*
	  * <p>��ȡָ�������Ϣ</p>
	  * @return String
	  * ����ֵΪ���з��ص�ָ�������Ϣ
	  */
	public function getBankRem() {
		return $this->bankRem;
	}
	
	/*
	 * <p>����ָ�������Ϣ</p>
	 * @param bankRem
	 * ָ�������Ϣ	 
	 */
	public function setBankRem($bankRem) {
		$this->bankRem = $bankRem;
	}
	
	/*
	  * <p>��ȡ�����ܽ��</p>
	  * @return String
	  * ����ֵΪ���з��صĶ����ܽ��
	  */
	public function getAmount() {
		return $this->amount;
	}
	
	/*
	 * <p>���ö����ܽ��</p>
	 * @param amount
	 * �����ܽ��	 
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}
	
	/*
	  * <p>��ȡ֧������</p>
	  * @return String
	  * ����ֵΪ���з��ص�֧������
	  */
	public function getCurrType() {
		return $this->currType;
	}
	
	/*
	 * <p>����֧������</p>
	 * @param currType
	 * ֧������	 
	 */
	public function setCurrType($currType) {
		$this->currType = $currType;
	}
	
	/*
	  * <p>��ȡ����֪ͨ����ʱ��</p>
	  * @return String
	  * ����ֵΪ���з��صķ���֪ͨ����ʱ��
	  */
	public function getTranTime() {
		return $this->tranTime;
	}
	
	/*
	 * <p>���÷���֪ͨ����ʱ��</p>
	 * @param tranTime
	 * ����֪ͨ����ʱ��	 
	 */
	public function setTranTime($tranTime) {
		$this->tranTime = $tranTime;
	}
	
	/*
	  * <p>��ȡ�̳ǻ���</p>
	  * @return String
	  * ����ֵΪ���з��ص��̳ǻ���
	  */
	public function getPayeeName() {
		return $this->payeeName;
	}
	
	/*
	 * <p>�����̳ǻ���/p>
	 * @param payeeName
	 * �����̳ǻ���	 
	 */
	public function setPayeeName($payeeName) {
		$this->payeeName = $payeeName;
	}
	
	/*
	  * <p>��ȡУ��������־</p>
	  * @return String
	  * ����ֵΪ���з��ص�У��������־
	  */
	public function getJoinFlag() {
		return $this->joinFlag;
	}
	
	/*
	 * <p>����У��������־/p>
	 * @param joinFlag
	 * ����У��������־	 
	 */
	public function setJoinFlag($joinFlag) {
		$this->joinFlag = $joinFlag;
	}
	
	/*
	  * <p>��ȡ�̳�������־</p>
	  * @return String
	  * ����ֵΪ���з��ص��̳�������־
	  */
	public function getMerJoinFlag() {
		return $this->merJoinFlag;
	}
	
	/*
	 * <p>�����̳�������־/p>
	 * @param merJoinFlag
	 * �����̳�������־ 
	 */
	public function setMerJoinFlag($merJoinFlag) {
		$this->merJoinFlag = $merJoinFlag;
	}
	
	/*
	  * <p>��ȡ�ͻ�������־</p>
	  * @return String
	  * ����ֵΪ���з��صĿͻ�������־
	  */
	public function getCustJoinFlag() {
		return $this->custJoinFlag;
	}
	
	/*
	 * <p>���ÿͻ�������־/p>
	 * @param custJoinFlag
	 * ���ؿͻ�������־	 
	 */
	public function setCustJoinFlag($custJoinFlag) {
		$this->custJoinFlag = $custJoinFlag;
	}
	
	/*
	  * <p>��ȡ������Ա��</p>
	  * @return String
	  * ����ֵΪ���з��ص�������Ա��
	  */
	public function getCustJoinNum() {
		return $this->custJoinNum;
	}
	
	/*
	 * <p>����������Ա��/p>
	 * @param custJoinNum
	 * ����������Ա��	 
	 */
	public function setCustJoinNum($custJoinNum) {
		$this->custJoinNum = $custJoinNum;
	}
	
	/*
	  * <p>��ȡ�̻�ǩ��֤��id</p>
	  * @return String
	  * ����ֵΪ���з��ص��̻�ǩ��֤��id
	  */
	public function getCertID() {
		return $this->certID;
	}
	
	/*
	 * <p>�̻�ǩ��֤��id/p>
	 * @param certID
	 * �̻�ǩ��֤��id	 
	 */
	public function setCertID($certID) {
		$this->certID = $certID;
	}

}
?>
