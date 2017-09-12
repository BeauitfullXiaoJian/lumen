<?php

require 'TranData.php';
require 'TranData11.php';

class OrderInfo {

	private $orderDate="";						//�������ڣ���ʽyyyyMMddHHmmss
	private $orderid="";						//������
	private $amount="";							//�������
	private $installmentTimes="1";				//��������
	private $curType="001";						//����
	private $merID="";							//�̳Ǵ���		
	private $merAcct="";						//�̳��˺�


	public function getOrderDate() {
		return $this->orderDate;
	}

	public function setOrderDate($orderDate) {
		$this->orderDate = $orderDate;
	}

	public function getOrderid() {
		return $this->orderid;
	}

	public function setOrderid($orderid) {
		$this->orderid = $orderid;
	}

	public function getAmount() {
		return $this->amount;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
	}

	public function getInstallmentTimes() {
		return $this->installmentTimes;
	}

	public function setInstallmentTimes($installmentTimes) {
		$this->installmentTimes = $installmentTimes;
	}

	public function getCurType() {
		return $this->curType;
	}

	public function setCurType($curType) {
		$this->curType = $curType;
	}

	public function getMerID() {
		return $this->merID;
	}

	public function setMerID($merID) {
		$this->merID = $merID;
	}

	public function getMerAcct() {
		return $this->merAcct;
	}

	public function setMerAcct($merAcct) {
		$this->merAcct = $merAcct;
	}
	  

          public function perpareData_OrderInfo($orderEntity){
                  if($orderEntity!=NULL){
                                $this->setOrderDate($orderEntity->getOrderDate());
                                $this->setOrderid($orderEntity->getOrderid());
                                $this->setAmount($orderEntity->getAmount());
                                $this->setInstallmentTimes($orderEntity->getInstallmentTimes());
                                $this->setCurType($orderEntity->getCurType());
                                $this->setMerID($orderEntity->getMerID());
                                $this->setMerAcct($orderEntity->getMerAcct());
                        }else{

                        }
          }


}

?>
