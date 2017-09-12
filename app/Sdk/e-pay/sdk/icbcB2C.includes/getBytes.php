<?php
	/*
	 * �����ṩbyte����ת������
	 */
	class Bytes{
		/*
		 * ���ַ���ת��Ϊbyte��������
		 * @param str
		 * �ַ���
		 * @return bytes
		 * ת�����byte����
		 */
		public static function getBytes($str){
			$len = strlen($str);
			$bytes = array();
			for($i=0;$i<$len;$i++){
				if(ord($str[$i]) >= 128){
					$byte = ord($str[$i])-256;
				}
				else{
					$byte = ord($str[$i]);
				}
				$bytes[] = $byte;
			}
			return $bytes;
		}
		
		/*
		 * ���ַ�ת��Ϊbyte�ֽ�
		 * @param char
		 * �ַ�
		 * @return char
		 * ת�����byte�ֽ�
		 */
		public static function getByte($char){
			if(ord($char) >= 128)
				return ord($char)-256;
			else
				return ord($char);
		}
		
		/*
		 * ��byte����ת��Ϊ�ַ���
		 * @param bytes
		 * byte����
		 * @return str
		 * ת������ַ���
		 */
		public static function getString($bytes){
			$str = "";
			foreach ($bytes as $c){
				$str .= chr($c);
			}
			return $str;
		}
	}
?>