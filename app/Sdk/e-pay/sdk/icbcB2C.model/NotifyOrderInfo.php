<?php 

	/*
	 * <p>notifyData�ж����б�������</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������icbcB2C���з���֪ͨ��ϢnotifyData�����еĶ����б����ݵķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@see <p>���й�������������������B2C����֧���ӿ�˵��V1.0.0.11��</p>
	 *@author ����ͩ
	 */
class NotifyOrderInfo {
	
	 private $orderid;
	 
	 private $amount;
	 
	 private $installmentTimes;
	 
	 private $merAcct;
	 
	 private $tranSerialNo;

	 /*
	  * <p>��ȡ������</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĶ�����
	  */
	public function getOrderid() {
		return $this->orderid;
	}

	/*
	 * <p>���ö�����</p>
	 * @param orderid
	 * ������	 
	 */
	public function setOrderid($orderid) {
		$this->orderid = $orderid;
	}

	 /*
	  * <p>��ȡ�������</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еĶ������
	  */
	public function getAmount() {
		return $this->amount;
	}

	/*
	 * <p>���û�ȡ�������</p>
	 * @param amount
	 * ��ȡ�������	 
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	 /*
	  * <p>��ȡ���ڸ�������</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�еķ��ڸ�������
	  */
	public function getInstallmentTimes() {
		return $this->installmentTimes;
	}

	/*
	 * <p>���÷��ڸ�������</p>
	 * @param installmentTimes
	 * ���ڸ�������	 
	 */
	public function setInstallmentTimes($installmentTimes) {
		$this->installmentTimes = $installmentTimes;
	}

	 /*
	  * <p>��ȡ�̻��˺�</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�е��̻��˺�
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
	  * <p>��ȡ����ָ�����</p>
	  * @return string
	  * ����ֵΪ����֪ͨ��Ϣ�е�����ָ�����
	  */
	public function getTranSerialNo() {
		return $this->tranSerialNo;
	}

	/*
	 * <p>��������ָ�����</p>
	 * @param tranSerialNo
	 * ����ָ����� 
	 */
	public function setTranSerialNo($tranSerialNo) {
		$this->tranSerialNo = $tranSerialNo;
	}
}
?>