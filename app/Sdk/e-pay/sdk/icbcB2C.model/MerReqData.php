<?php 
	/*
	 * <p>icbcB2C��������API��ѯ������Ϣ��</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������cbcB2C��������API��ѯ������Ϣ�ķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@see <p>����������ϵͳ�̻�API��ѯ�ӿ��ֲ�V1.1��</p>
	 *@author ����ͩ
	 */
class MerReqData {
	
	private $orderNum;
	
	private $tranDate;
	
	private $shopCode;
	
	private $shopAccount;

	 /*
	  * <p>��ȡ������</p>
	  * @return String
	  * ����ֵΪ�̻�����Ķ�����
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
	  * ����ֵΪ�̻�����Ľ�������
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
	  * ����ֵΪ�̻�������̼Һ���
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
	  * ����ֵΪ�̻�������̳��˺�
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
}
?>