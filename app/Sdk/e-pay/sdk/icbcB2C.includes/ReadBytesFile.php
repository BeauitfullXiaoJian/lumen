<?php
	require_once dirname(__FILE__).'./getBytes.php';
	
	/*
	 * �����ṩ֤��byte��ʽ��ȡ����
	 */
	class ReadBytesFile{
		/*
		 * ��byte��ʽ��ȡ֤�飬����byte����
		 * @param filePath
		 * ֤��·��
		 * @return bytes
		 * ��ȡ���byte����
		 */
		public static function readFile($filePath){
			if(!file_exists($filePath))
				return null;
			else{
				$file = fopen($filePath, "r");
				$bytes = array();
				while(!feof($file)){
					$bytes[] = Bytes::getByte(fgetc($file));
//$bytes[] = getByte(fgetc($file));
				}
				fclose($file);
				$bytes = array_slice($bytes, 0, count($bytes)-1);
				return $bytes;
			}
		}
		public static function getByte($char){
			if(ord($char) >= 128)
				return ord($char)-256;
			else
				return ord($char);
		}	
	}
?>