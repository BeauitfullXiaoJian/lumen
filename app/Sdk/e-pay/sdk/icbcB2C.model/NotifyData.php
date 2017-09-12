<?php 

	/*
	 * <p>icbcB2C-notifyData���ݶ�����</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������icbcB2C���з���֪ͨ��Ϣ��notifyData���ݵķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@see <p>���й�������������������B2C����֧���ӿ�˵��V1.0.0.11��</p>
	 *@author ����ͩ
	 */
class NotifyData {
	
	 private $interfaceName;
	 
	 private $interfaceVersion;
	 
	 private $orderDate;
	 
	 private $subOrderInfoList;
	 
	 private $curType;
	 
	 private $merID;
	 
	 private $verifyJoinFlag;
	 
	 private $joinFlag;
	 
	 private $userNum;
	 
	 private $tranBatchNo;
	 
	 private $notifyDate;
	 
	 private $tranStat;
	 
	 private $comment;
	 
	 private $notifyData;
	 	 
	 /*
	  * <p>��ȡnotifyData��XML���Ĵ�</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ��XML������ʽ
	  */
	 public function getNotifyData() {
		return $this->notifyData;
	}

	/*
	 * <p>����notifyData��XML���Ĵ�</p>
	 * @param notifyData
	 * ����֪ͨ��Ϣ��XML������ʽ	 
	 */
	public function setNotifyData($notifyData) {
		$this->notifyData = $notifyData;
	}

	 /*
	  * <p>��ȡ�ӿ�����</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĽӿ�����
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
	  * <p>��ȡ�ӿڰ汾</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĽӿڰ汾
	  */
	public function getInterfaceVersion() {
		return $this->interfaceVersion;
	}

	/*
	 * <p>���ýӿڰ汾</p>
	 * @param interfaceVersion
	 * �ӿڰ汾
	 */
	public function setInterfaceVersion($interfaceVersion) {
		$this->interfaceVersion = $interfaceVersion;
	}

	 /*
	  * <p>��ȡ��������ʱ��</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĽ�������ʱ��
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
	  * <p>��ȡ�����б���Ϣ</p>
	  * @return array
	  * ����ֵΪ����֪ͨ��Ϣ�еĶ����б���Ϣ
	  */
	public function getSubOrderInfoList() {
		return $this->subOrderInfoList;
	}

	/*
	 * <p>���ö����б���Ϣ</p>
	 * @param subOrderInfoList
	 * �����б���Ϣ	 
	 */
	public function setSubOrderInfoList($subOrderInfoList) {
		$this->subOrderInfoList = $subOrderInfoList;
	}

	 /*
	  * <p>��ȡ֧������</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�е�֧������
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
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�е��̻�����
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
	  * <p>��ȡ����������־</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еļ���������־
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
	  * <p>��ȡ�ͻ�������־</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĿͻ�������־
	  */
	public function getJoinFlag() {
		return $this->joinFlag;
	}

	/*
	 * <p>���ÿͻ�������־</p>
	 * @param joinFlag
	 * �ͻ�������־	 
	 */
	public function setJoinFlag($joinFlag) {
		$this->joinFlag = $joinFlag;
	}

	 /*
	  * <p>��ȡ������Ա��</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�е�������Ա��
	  */
	public function getUserNum() {
		return $this->userNum;
	}

	/*
	 * <p>����������Ա��</p>
	 * @param userNum
	 * ������Ա��	 
	 */
	public function setUserNum($userNum) {
		$this->userNum = $userNum;
	}

	 /*
	  * <p>��ȡ���κ�</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�е����κ�
	  */
	public function getTranBatchNo() {
		return $this->tranBatchNo;
	}

	/*
	 * <p>�������κ�</p>
	 * @param tranBatchNo
	 * ���κ�	 
	 */
	public function setTranBatchNo($tranBatchNo) {
		$this->tranBatchNo = $tranBatchNo;
	}

	 /*
	  * <p>��ȡ����֪ͨ����ʱ��</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еķ���֪ͨ����ʱ��
	  */
	public function getNotifyDate() {
		return $this->notifyDate;
	}

	/*
	 * <p>���÷���֪ͨ����ʱ��</p>
	 * @param notifyDate
	 * ����֪ͨ����ʱ��	 
	 */
	public function setNotifyDate($notifyDate) {
		$this->notifyDate = $notifyDate;
	}

	 /*
	  * <p>��ȡ��������״̬</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĶ�������״̬
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
	  * <p>��ȡ��������</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĴ�������
	  */
	public function getComment() {
		return $this->comment;
	}

	/*
	 * <p>���ô�������</p>
	 * @param comment
	 * �������� 
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	} 
}
?>