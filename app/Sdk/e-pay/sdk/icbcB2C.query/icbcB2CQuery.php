<?php
	require_once dirname(__FILE__)."/../icbcB2C.model/MerResData.php";
	require_once dirname(__FILE__)."/../icbcB2C.model/MerReqData.php";
	/*
	 * <p>icbcB2CAPI��ѯ�ӿ�</p>
	 * <br/>
	 *<p>�˽ӿ����ڰ������š��������ڲ�ѯ���嶩��״̬</P>
	 *@see <p>����������ϵͳ�̻�API��ѯ�ӿ��ֲ�V1.1��</p>
	 *@author ����ͩ
	 */
interface IcbcB2CQuery {
	
	/*
	 * <p>��װMerResData����</p>
	 * @param xmlDoc
	 * ���з��ص�B2CAPIxml���Ĵ�
	 * @return MerResData
	 * @throws Exception
	 */
	public function xmlElements($xmlDoc);
	
	/*
	 * <p>��ѯICBCApi����</p>
	 * @param xmlPath
	 * �����ļ�·��
	 * @param merReqData
	 * ���ص����з��صĸ��ֳ�
	 * @return MerResData
	 * @throws Exception
	 */
	public function getICBCApiData($xmlPath, $merReqData);
}
?>