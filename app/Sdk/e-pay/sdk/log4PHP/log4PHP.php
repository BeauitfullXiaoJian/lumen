<?php
	require_once dirname(__FILE__).'/../log4PHP/php/Logger.php';	//����log4php�����ļ�
	Logger::configure(dirname(__FILE__).'/../log4PHP/log4PHPConfig.xml');
	
	//������־����$nameΪ������־���������
	class Log{
		public static function getLogger($name){
			return Logger::getLogger($name);
		}
	}
?>