<?php 
	require_once dirname(__FILE__).'/../icbcB2C.model/NotifyData.php';

	/*
	 * <p>icbcB2C���չ���֪ͨ��Ϣ�ӿ�</p>
	 * <br/>
	 *<p>�˽ӿ����ڽ����յ��Ĺ���֪ͨ��Ϣ���Ĵ���ǩ���ܣ������̻���Ҫ��֪ͨ��Ϣ����</P>
	 *@see <p>���й�������������������B2C����֧���ӿ�˵��V1.0.0.11��</p>
	 *@author ����ͩ
	 */
interface IcbcB2CNotify {
	
	/*
	 * <p>����֪ͨ�ӿ���Ϣ</p>
	 * @param notifyData
	 * base64���������֪ͨ��Ϣ
	 * @param signMsg
	 * ��notifyData��ǩ������base64����Ľ��
	 * @param xmlPath
	 * �����ļ����·��
	 * @return notifyData
	 * @throws Exception
	 */
	public function createNotifyData($notifyData, $signMsg, $xmlPath);
	
	/*
	 * <p>��xml�ַ���������notifyData</p>
	 * @param xmlDoc
	 * notifyData��xml�ַ���
	 * @return notifyData 
	 * @throws Exception
	 */
	public function xmlElements($xmlDoc);

}
?>