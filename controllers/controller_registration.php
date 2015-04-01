<?
//include("models/registration.php");

class Controller_registration
{
	function __construct()
	{

	}

	function registration()
	{
		include("models/registration.php");
		$userLanguage = $_GET['id']; // отримуємо ідентифікатор мови

		if (empty($userLanguage)){
			$userLanguage = Language::browserLang();
		}

		$lang = Language::getLang($userLanguage);
		$getCountry = RegistrationModel::getCountry($userLanguage);
		$selectCountry = RegistrationModel::buildSelect($getCountry, 'country', 0);

		$getProgramLanguich = RegistrationModel::getProgramLanguich();
		$selectProfession = RegistrationModel::buildSelect($getProgramLanguich, 'profession', 1);

		include("views/registration/registration.php");
		$action = $this->saveregistration();
}

	function saveregistration()
	{
			print_r("registration success");

	}


}
?>