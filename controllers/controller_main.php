<?php
/**
 * Created by PhpStorm.
 * User: cinjko
 * Date: 3/25/2015
 * Time: 10:21 PM
 */

class Controller_main
{
    function __construct()
    {
        include("/models/language.php");

        $userLanguage = $_GET['id']; // отримуємо ідентифікатор мови

        if (empty($userLanguage)){
            $userLanguage = Language::browserLang();
        }
        $lang = Language::getLang($userLanguage);

        include("/views/log/log.php");
    }
}
