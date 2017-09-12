<?php 
	/*
	 * <p>icbcB2C-tranData���ݶ�����</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������tranData���ݵķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@author ����ͩ
	 *@date 2013-9-10
	 */
class TranData {

	 private $interfaceName;
	 
	 private $interfaceVersion;
	 
	 private $orderDate;
	 
	 private $verifyJoinFlag;
	 
	 private $language;
	 
	 private $curType;
	 
	 private $merID;
	 
	 private $creditType;
	 
	 private $notifyType;
	 
	 private $resultType;
	 
	 private $merReference;
	 
	 private $merCustomIp;
	 
	 private $goodsType;
	 
	 private $merCustomID;
	 
	 private $merCustomPhone;
	 
	 private $goodsAddress;
	 
	 private $merOrderRemark;
	 
	 private $merHint;
	 
	 private $remark1;
	 
	 private $remark2;
	 
	 private $merURL;
	 
	 private $merVAR;
	 
	 private $orderInfoVector;
	 
	 private $merAcct;
	 
	 
	/*
	 * <p>��ȡ�̻��˺�</p>
	 * @return String
	 * ����ֵΪtranData�е��̻��˺�
	 */
	public function getMerAcct() {
		return $this->merAcct;
	}

	/*
	 * <p>�����̻��˺�</p>
	 * @param merAcct
	 * �̻��˺� 
	 */
	public function setMerAcct($merAcct) {
		$this->merAcct = $merAcct;
	}

	 /*
	  * <p>��ȡ�ӿ�����</p>
	  * @return String
	  * ����ֵΪtranData�еĽӿ�����
	  */
	public function getInterfaceName() {
		return $this->interfaceName;
	}

	/*
	 * <p>���ýӿ�����</p>
	 * @param interfaceName
	 * �ӿ����� 
	 */
	public function setInterfaceName($interfaceName) {
		$this->interfaceName = $interfaceName;
	}

	 /*
	  * <p>��ȡ�ӿڰ汾��</p>
	  * @return String
	  * ����ֵΪtranData�еĽӿڰ汾��
	  */
	public function getInterfaceVersion() {
		return $this->interfaceVersion;
	}

	/*
	 * <p>���ýӿڰ汾��</p>
	 * @param interfaceVersion
	 * �ӿڰ汾��	 
	 */
	public function setInterfaceVersion($interfaceVersion) {
		$this->interfaceVersion = $interfaceVersion;
	}

	 /*
	  * <p>��ȡ��������ʱ��</p>
	  * @return String
	  * ����ֵΪtranData�еĽ�������ʱ��
	  */
	public function getOrderDate() {
		return $this->orderDate;
	}

	/*
	 * <p>���ý�������ʱ��</p>
	 * @param orderDate
	 * ��������ʱ��  
	 */
	public function setOrderDate($orderDate) {
		$this->orderDate = $orderDate;
	}
	
	 /*
	  * <p>��ȡ����������־</p>
	  * @return String
	  * ����ֵΪtranData�еļ���������־
	  */
	public function getVerifyJoinFlag() {
		return $this->verifyJoinFlag;
	}

	/*
	 * <p>���ü���������־</p>
	 * @param verifyJoinFlag
	 * ����������־	 
	 */
	public function setVerifyJoinFlag($verifyJoinFlag) {
		$this->verifyJoinFlag = $verifyJoinFlag;
	}

	 /*
	  * <p>��ȡ���԰汾</p>
	  * @return String
	  * ����ֵΪtranData�е����԰汾
	  */
	public function getLanguage() {
		return $this->language;
	}

	/*
	 * <p>�������԰汾</p>
	 * @param language
	 * ���԰汾	 
	 */
	public function setLanguage($language) {
		$this->language = $language;
	}

	 /*
	  * <p>��ȡ֧������</p>
	  * @return String
	  * ����ֵΪtranData�е����԰汾
	  */
	public function getCurType() {
		return $this->curType;
	}

	/*
	 * <p>����֧������</p>
	 * @param curType
	 * ֧������
	 */
	public function setCurType($curType) {
		$this->curType = $curType;
	}

	 /*
	  * <p>��ȡ�̻�����</p>
	  * @return String
	  * ����ֵΪtranData�е��̻�����
	  */
	public function getMerID() {
		return $this->merID;
	}

	/*
	 * <p>�����̻�����</p>
	 * @param merID
	 * �̻�����
	 
	 */
	public function setMerID($merID) {
		$this->merID = $merID;
	}

	 /*
	  * <p>��ȡ֧�ֶ���֧�������п�����</p>
	  * @return String
	  * ����ֵΪtranData�е�֧�ֶ���֧�������п�����
	  */
	public function getCreditType() {
		return $this->creditType;
	}

	/*
	 * <p>����֧�ֶ���֧�������п�����</p>
	 * @param creditType
	 * ֧�ֶ���֧�������п�����	 
	 */
	public function setCreditType($creditType) {
		$this->creditType = $creditType;
	}

	 /*
	  * <p>��ȡ֪ͨ����</p>
	  * @return String
	  * ����ֵΪtranData�е�֧�ֶ���֧�������п�����
	  */
	public function getNotifyType() {
		return $this->notifyType;
	}

	/*
	 * <p>����֪ͨ����</p>
	 * @param notifyType
	 * ֪ͨ����	 
	 */
	public function setNotifyType($notifyType) {
		$this->notifyType = $notifyType;
	}

	 /*
	  * <p>��ȡ�����������</p>
	  * @return String
	  * ����ֵΪtranData�еĽ����������
	  */
	public function getResultType() {
		return $this->resultType;
	}

	/*
	 * <p>���ý����������</p>
	 * @param resultType
	 * �����������	 
	 */
	public function setResultType($resultType) {
		$this->resultType = $resultType;
	}

	 /*
	  * <p>��ȡ�̻�reference</p>
	  * @return String
	  * ����ֵΪtranData�е��̻�reference
	  */
	public function getMerReference() {
		return $this->merReference;
	}

	/*
	 * <p>�����̻�reference</p>
	 * @param merReference
	 * �̻�reference 
	 */
	public function setMerReference($merReference) {
		$this->merReference = $merReference;
	}
	
	 /*
	  * <p>��ȡ�ͻ���IP</p>
	  * @return String
	  * ����ֵΪtranData�еĿͻ���IP
	  */
	public function getMerCustomIp() {
		return $this->merCustomIp;
	}

	/*
	 * <p>���ÿͻ���IPe</p>
	 * @param merCustomIp
	 * �ͻ���IP	 
	 */
	public function setMerCustomIp($merCustomIp) {
		$this->merCustomIp = $merCustomIp;
	}

	 /*
	  * <p>��ȡ������Ʒ/ʵ����Ʒ��־λ</p>
	  * @return String
	  * ����ֵΪtranData�е�������Ʒ/ʵ����Ʒ��־λ
	  */
	public function getGoodsType() {
		return $this->goodsType;
	}

	/*
	 * <p>����������Ʒ/ʵ����Ʒ��־λ</p>
	 * @param goodsType
	 * ������Ʒ/ʵ����Ʒ��־λ	 
	 */
	public function setGoodsType($goodsType) {
		$this->goodsType = $goodsType;
	}

	 /*
	  * <p>��ȡ����û���</p>
	  * @return String
	  * ����ֵΪtranData�е�����û���
	  */
	public function getMerCustomID() {
		return $this->merCustomID;
	}

	/*
	 * <p>��������û���</p>
	 * @param merCustomID
	 * ����û���	 
	 */
	public function setMerCustomID($merCustomID) {
		$this->merCustomID = $merCustomID;
	}

	/*
	  * <p>��ȡ�����ϵ�绰</p>
	  * @return String
	  * ����ֵΪtranData�е������ϵ�绰
	  */
	public function getMerCustomPhone() {
		return $this->merCustomPhone;
	}

	/*
	 * <p>���������ϵ�绰</p>
	 * @param merCustomPhone
	 * �����ϵ�绰 
	 */
	public function setMerCustomPhone($merCustomPhone) {
		$this->merCustomPhone = $merCustomPhone;
	}

	/*
	  * <p>��ȡ�ջ���ַ</p>
	  * @return String
	  * ����ֵΪtranData�е��ջ���ַ
	  */
	public function getGoodsAddress() {
		return $this->goodsAddress;
	}

	/*
	 * <p>�����ջ���ַ</p>
	 * @param goodsAddress
	 * �ջ���ַ	 
	 */
	public function setGoodsAddress($goodsAddress) {
		$this->goodsAddress = $goodsAddress;
	}

	 /*
	  * <p>��ȡ������ע</p>
	  * @return String
	  * ����ֵΪtranData�еĶ�����ע
	  */
	public function getMerOrderRemark() {
		return $this->merOrderRemark;
	}

	/*
	 * <p>���ö�����ע</p>
	 * @param merOrderRemark
	 * ������ע 
	 */
	public function setMerOrderRemark($merOrderRemark) {
		$this->merOrderRemark = $merOrderRemark;
	}

	 /*
	  * <p>��ȡ�̳���ʾ</p>
	  * @return String
	  * ����ֵΪtranData�е��̳���ʾ
	  */
	public function getMerHint() {
		return $this->merHint;
	}

	/*
	 * <p>�����̳���ʾ</p>
	 * @param merHint
	 * �̳���ʾ	 
	 */
	public function setMerHint($merHint) {
		$this->merHint = $merHint;
	}

	 /*
	  * <p>��ȡ��ע�ֶ�1</p>
	  * @return String
	  * ����ֵΪtranData�еı�ע�ֶ�1
	  */
	public function getRemark1() {
		return $this->remark1;
	}

	/*
	 * <p>���ñ�ע�ֶ�1</p>
	 * @param remark1
	 * ��ע�ֶ�1 
	 */
	public function setRemark1($remark1) {
		$this->remark1 = $remark1;
	}

	 /*
	  * <p>��ȡ��ע�ֶ�2</p>
	  * @return String
	  * ����ֵΪtranData�еı�ע�ֶ�2
	  */
	public function getRemark2() {
		return $this->remark2;
	}

	/*
	 * <p>���ñ�ע�ֶ�2</p>
	 * @param remark2
	 * ��ע�ֶ�2 
	 */
	public function setRemark2($remark2) {
		$this->remark2 = $remark2;
	}

	 /*
	  * <p>��ȡ�����̻�URL</p>
	  * @return String
	  * ����ֵΪtranData�еķ����̻�URL
	  */
	public function getMerURL() {
		return $this->merURL;
	}

	/*
	 * <p>���÷����̻�URL</p>
	 * @param merURL
	 * �����̻�URL 
	 */
	public function setMerURL($merURL) {
		$this->merURL = $merURL;
	}

	 /*
	  * <p>��ȡ�����̻�����</p>
	  * @return String
	  * ����ֵΪtranData�еķ����̻�����
	  */
	public function getMerVAR() {
		return $this->merVAR;
	}

	/*
	 * <p>���÷����̻�����</p>
	 * @param merVAR
	 * �����̻�����	 
	 */
	public function setMerVAR($merVAR) {
		$this->merVAR = $merVAR;
	}

	 /*
	  * <p>��ȡtranData�еĶ����б���Ϣ</p>
	  * @return array
	  * ����ֵΪtranData�еĶ����б���Ϣ
	  */
	public function getOrderInfoVector() {
		return $this->orderInfoVector;
	}

	/*
	 * <p>����tranData�еĶ����б���Ϣ</p>
	 * @param orderInfoVector
	 * tranData�еĶ����б���Ϣ	 
	 */
	public function setOrderInfoVector($orderInfoVector) {
		$this->orderInfoVector = $orderInfoVector;
	}
}

?>