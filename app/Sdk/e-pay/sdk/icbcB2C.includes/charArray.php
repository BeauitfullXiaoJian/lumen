<?php
	/*
	 * �ַ���ת��������
	 */
	class CharArray{
		/*
		 * ���ַ���ת��Ϊ�ַ�����
		 * @param str
		 * �ַ���
		 * @return charArray
		 * ת������ַ�����
		 */
		public static function toCharArray($str){
			$charArray = array();
			$len = strlen($str);
			for($i=0;$i<$len;$i++){
				$charArray[] = $str[$i];
			}
			return $charArray;
		}
	}
?>