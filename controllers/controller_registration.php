<?
//include("models/registration.php");

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
		include_once("/views/registration/registration.php");die;
		$selectCountry = RegistrationModel::buildSelect($getCountry, 'country', 0);

		$getProgramLanguage = RegistrationModel::getProgramLanguich();
		$selectProfession = RegistrationModel::buildSelect($getProgramLanguage, 'profession', 1);

		$getCountry = RegistrationModel::getCountry($userLanguage);
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
