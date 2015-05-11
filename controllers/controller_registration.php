<?
include_once("/models/registration.php");

class Controller_registration
{
	function __construct()
	{
		include_once("/models/language.php");
		$userLanguage = $_GET['id']; // отримуємо ідентифікатор мови

		if (empty($userLanguage)){
			$userLanguage = Language::browserLang();
		}

		$lang = Language::getLang($userLanguage);

		$getCountry = RegistrationModel::getCountry($userLanguage);
		$selectCountry = RegistrationModel::buildSelect($getCountry, 'country', 0);

		$getProgramLanguage = RegistrationModel::getProgramLanguich();
		$selectProfession = RegistrationModel::buildSelect($getProgramLanguage, 'profession', 1);

		include_once("/views/registration/registration.php");
	}

	function registration()
	{

//		$action = $this->saveregistration();
}

	function saveregistration()
	{
			print_r("registration success");

	}


}
