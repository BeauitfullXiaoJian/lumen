<?php 
	/*
	 * <p>icbcB2C֧��Form����</p>
	 * <br/>
	 *<p>�����ṩ��ȡ������icbcB2C֧��Form����Ϣ�ķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</P>
	 *@see <p>���й�������������������B2C����֧���ӿ�˵��V1.0.0.11��</p>
	 *@author ����ͩ
	 */
class FormData {
	
	 private $interfaceName;
	 
	 private $interfaceVersion;
	 
	 private $tranData;
	 
	 private $merSignMsg;
	 
	 private $merCert;

         private $tranDataMingWen;

	 /*
	  * <p>��ȡ�ӿ�����</p>
	  * @return String
	  * ����ֵΪ�̻�����Ľӿ�����
	  */
	public function gettranDataMingWen() {
		return $this->tranDataMingWen;
	}

	/*
	 * <p>���ýӿ�����</p>
	 * @param interfaceName
	 * �ӿ�����	 
	 */
	public function settranDataMingWen($tranDataMingWen) {
		$this->tranDataMingWen = $tranDataMingWen;
	}

	 /*
	  * <p>��ȡ�ӿ�����</p>
	  * @return String
	  * ����ֵΪ�̻�����Ľӿ�����
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
	  * ����ֵΪ�̻�����Ľӿڰ汾��
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
	  * <p>��ȡ��������XML���Ĵ�</p>
	  * @return String
	  * ����ֵΪ�̻�����Ľ�������XML���Ĵ�
	  */
	public function getTranData() {
		return $this->tranData;
	}

	/*
	 * <p>���ý�������XML���Ĵ�</p>
	 * @param tranData
	 * ��������XML���Ĵ�
	 
	 */
	public function setTranData($tranData) {
		$this->tranData = $tranData;
	}

	 /*
	  * <p>��ȡ����ǩ������</p>
	  * @return String
	  * ����ֵΪ�̻�����Ķ���ǩ������
	  */
	public function getMerSignMsg() {
		return $this->merSignMsg;
	}

	/*
	 * <p>���ö���ǩ������</p>
	 * @param merSignMsg
	 * ����ǩ������	 
	 */
	public function setMerSignMsg($merSignMsg) {
		$this->merSignMsg = $merSignMsg;
	}

	 /*
	  * <p>��ȡ�̳�֤�鹫Կ</p>
	  * @return String
	  * ����ֵΪ�̻�������̳�֤�鹫Կ
	  */
	public function getMerCert() {
		return $this->merCert;
	}

	/*
	 * <p>�����̳�֤�鹫Կ</p>
	 * @param merCert
	 * �̳�֤�鹫Կ	 
	 */
	public function setMerCert($merCert) {
		$this->merCert = $merCert;
	}
}
?>