<?php
	/*
	 * <p>icbcB2C������Ϣ��</p>
	 * <br/>
	 *<p>�����ṩ�ӹ���B2C�̻������ļ���ȡ�������ֶ���Ϣ�ķ�����ͨ��get������ȡ�ֶ�ֵ��set���������ֶ�ֵ</p>
	 *@author ����ͩ
	 *@date 2013-9-10
	 */
class B2cConfig {
	
	 private $interfaceName;
	 
	 private $interfaceVersion;
	 
	 private $merAcct;
	 
	 private $verifyJoinFlag;
	 
	 private $Language;
	 
	 private $curType;
	 
	 private $merID;
	 
	 private $creditType;
	 
	 private $notifyType;
	 
	 private $resultType;
	 
	 private $merReference;
	 
	 private $merCustomIp;
	 
	 private $merHint;
	 
	 private $remark1;
	 
	 private $remark2;
	 
	 private $merURL;
	 
	 private $merVAR;
	 
	 private $userCrtPath;
	 
	 private $userKeyPath;
	 
	 private $password;
	 
	 private $pemPath;
	 
	 private $apiQueryHost;
	 
	 private $apiQueryHostPort;
	 
	 private $publicCrtPath;
	 
 	/*
	 * <p>��ȡ���й�Կ��ŵ�ַ</p>
	 * @return String
	 * ����ֵΪ���й�Կ��ŵ�ַ
	 */
	 public function getPublicCrtPath() {
		return $this->publicCrtPath;
	}

	 /*
	 * <p>�������й�Կ��ŵ�ַ</p>
	 * @param publicCrtPath
	 * ���й�Կ��ŵ�ַ 
	 */
	public function setPublicCrtPath($publicCrtPath) {
		$this->publicCrtPath = $publicCrtPath;
	}

	/*
	 * <p>��ȡ�ӿ�����</p>
	 * @return String
	 * ����ֵΪ�����ļ��еĽӿ�����
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
	 * ����ֵΪ�����ļ��еĽӿڰ汾��
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
	 * <p>��ȡ�̻��˺�</p>
	 * @return String
	 * ����ֵΪ�����ļ��е��̻��˺�
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
	 * <p>��ȡ����������־</p>
	 * @return String
	 * ����ֵΪ�����ļ��еļ���������־
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
	 * ����ֵΪ�����ļ��е����԰汾
	 */
	public function getLanguage() {
		return $this->Language;
	}

	/*
	 * <p>�������԰汾</p>
	 * @param language
	 * ���԰汾
	 */
	public function setLanguage($language) {
		$this->Language = $language;
	}

	/*
	 * <p>��ȡ֧������</p>
	 * @return String
	 * ����ֵΪ�����ļ��е�֧������
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
	 * ����ֵΪ�����ļ��е��̻�����
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
	 * ����ֵΪ�����ļ��е�֧�ֶ���֧�������п�����
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
	 * ����ֵΪ�����ļ��е�֪ͨ����
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
	 * ����ֵΪ�����ļ��еĽ����������
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
	 * ����ֵΪ�����ļ��е��̻�reference
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
	 * ����ֵΪ�����ļ��еĿͻ���IP
	 */
	public function getMerCustomIp() {
		return $this->merCustomIp;
	}

	/*
	 * <p>���ÿͻ���IP</p>
	 * @param merCustomIp
	 * �ͻ���IP
	 */
	public function setMerCustomIp($merCustomIp) {
		$this->merCustomIp = $merCustomIp;
	}

	/*
	 * <p>��ȡ�̳���ʾ</p>
	 * @return String
	 * ����ֵΪ�����ļ��е��̳���ʾ
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
	 * ����ֵΪ�����ļ��еı�ע�ֶ�1
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
	 * ����ֵΪ�����ļ��еı�ע�ֶ�2
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
	 * ����ֵΪ�����ļ��еķ����̻�URL
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
	 * ����ֵΪ�����ļ��еķ����̻�����
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
	 * <p>��ȡ�̻�֤����·��</p>
	 * @return String
	 * ����ֵΪ�����ļ��е��̻�֤����·��
	 */
	public function getUserCrtPath() {
		return $this->userCrtPath;
	}

	/*
	 * <p>�����̻�֤����·��</p>
	 * @param userCrtPath
	 * �̻�֤����·��
	 */
	public function setUserCrtPath($userCrtPath) {
		$this->userCrtPath = $userCrtPath;
	}

	/*
	 * <p>��ȡ�̻�˽Կ���·��</p>
	 * @return String
	 * ����ֵΪ�����ļ��е��̻�˽Կ���·��
	 */
	public function getUserKeyPath() {
		return $this->userKeyPath;
	}

	/*
	 * <p>�����̻�˽Կ���·��</p>
	 * @param userKeyPath
	 * �̻�˽Կ���·��
	 */
	public function setUserKeyPath($userKeyPath) {
		$this->userKeyPath = $userKeyPath;
	}

	/*
	 * <p>��ȡ�̻�֤��������</p>
	 * @return String
	 * ����ֵΪ�����ļ��е��̻�֤��������
	 */
	public function getPassword() {
		return $this->password;
	}

	/*
	 * <p>�����̻�֤��������</p>
	 * @param password
	 *�̻�֤��������
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/*
	 * <p>��ȡ�̻���Կ���ļ����·��</p>
	 * @return String
	 * ����ֵΪ�����ļ��е��̻���Կ���ļ����·��
	 */
	public function getPemPath() {
		return $this->pemPath;
	}

	/*
	 * <p>�����̻���Կ���ļ����·��</p>
	 * @param pemPath
	 *�̻���Կ���ļ����·��
	 */
	public function setPemPath($pemPath) {
		$this->pemPath = $pemPath;
	}

	/*
	 * <p>��ȡAPI��ѯ����IP����������</p>
	 * @return String
	 * ����ֵΪ�����ļ��е�API��ѯ����IP����������
	 */
	public function getApiQueryHost() {
		return $this->apiQueryHost;
	}

	/*
	 * <p>����API��ѯ����IP����������</p>
	 * @param apiQueryHost
	 *API��ѯ����IP����������
	 */
	public function setApiQueryHost($apiQueryHost) {
		$this->apiQueryHost = $apiQueryHost;
	}

	/*
	 * <p>��ȡAPI��ѯ�����˿ں�</p>
	 * @return int
	 * ����ֵΪ�����ļ��е�API��ѯ�����˿ں�
	 */
	public function getApiQueryHostPort() {
		return $this->apiQueryHostPort;
	}

	/*
	 * <p>����API��ѯ�����˿ں�</p>
	 * @param apiQueryHostPort
	 *API��ѯ�����˿ں�
	 */
	public function setApiQueryHostPort($apiQueryHostPort) {
		$this->apiQueryHostPort = $apiQueryHostPort;
	} 	
}

?>