<?php 
	/*
	 * <p>tranData�еĶ����б����ݶ�����</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������tranData�еĶ����б����ݵķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@see <p>���й�������������������B2C����֧���ӿ�˵��V1.0.0.11��</p>
	 *@author ����ͩ
	 */
class OrderInfo {
	
	 private $orderid;
	 
	 private $amount;
	 
	 private $installmentTimes;
	 
	 private $goodsID;
	 
	 private $goodsName;
	 
	 private $goodsNum;
	 
	 private $carriageAmt;

	 /*
	  * <p>��ȡ������</p>
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��еĶ�����
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
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��еĶ������
	  */
	public function getAmount() {
		return $this->amount;
	}

	/*
	 * <p>���ö������</p>
	 * @param amount
	 * �������	 
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	 /*
	  * <p>��ȡ���ڸ�������</p>
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��еķ��ڸ�������
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
	  * <p>��ȡ��Ʒ���</p>
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��е���Ʒ���
	  */
	public function getGoodsID() {
		return $this->goodsID;
	}

	/*
	 * <p>������Ʒ���</p>
	 * @param goodsID
	 * ��Ʒ���	 
	 */
	public function setGoodsID($goodsID) {
		$this->goodsID = $goodsID;
	}

	 /*
	  * <p>��ȡ��Ʒ����</p>
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��е���Ʒ����
	  */
	public function getGoodsName() {
		return $this->goodsName;
	}

	/*
	 * <p>������Ʒ����</p>
	 * @param goodsName
	 * ��Ʒ����	 
	 */
	public function setGoodsName($goodsName) {
		$this->goodsName = $goodsName;
	}

	 /*
	  * <p>��ȡ��Ʒ����</p>
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��е���Ʒ����
	  */
	public function getGoodsNum() {
		return $this->goodsNum;
	}

	/*
	 * <p>������Ʒ����</p>
	 * @param goodsNum
	 * ��Ʒ����	 
	 */
	public function setGoodsNum($goodsNum) {
		$this->goodsNum = $goodsNum;
	}

	 /*
	  * <p>��ȡ�Ѻ��˷ѽ��</p>
	  * @return String
	  * ����ֵΪ֧����Ϣ�б��е��Ѻ��˷ѽ��
	  */
	public function getCarriageAmt() {
		return $this->carriageAmt;
	}

	/*
	 * <p>�����Ѻ��˷ѽ��</p>
	 * @param carriageAmt
	 * �Ѻ��˷ѽ��	 
	 */
	public function setCarriageAmt($carriageAmt) {
		$this->carriageAmt = $carriageAmt;
	}
}
?>