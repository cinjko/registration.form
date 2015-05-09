<?php
class Language {
		private $browserLang;
		private $userLanguage;
		public $lang = array();

		function __construct(){

		}

		public static function getLang($userLanguage){
			if(!isset($userLanguage)){
				$userLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // Визначаємо мову браузера;
//				запитати в Барса як це зробити через функцію
			}

			$path = $_SERVER['DOCUMENT_ROOT'];
			$langFile = $path.'/registration.form/language/'.$userLanguage.'.ini';
			if(!file_exists($langFile)){
				echo "Не можливо загрузити мову!";
//				 exit;
			}

			$lang = parse_ini_file($langFile);
			return $lang;
		}

		public static function browserLang(){
			$browsLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // Визначаємо мову браузера;
			return $browsLang;
		}
}
?>