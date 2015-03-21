<?php
class RegistrationModel{

    public static function getCountry($userLanguage){
        if($userLanguage == "en") $name = "name_en";
        if($userLanguage == "ru") $name = "name_ru";
        if($userLanguage == "uk") $name = "name_uk";

        $link = mysqli_connect(localhost, root, '', form);
        $query = "SELECT id, $name AS name FROM countries ORDER BY id";

        if(!$result = mysqli_query($link, $query)){
            return false;
        }

        $countries = mysqli_fetch_all($result, MYSQL_ASSOC);
        mysqli_free_result($result);

        return $countries;

        mysqli_close($link);
    }

    public static function buildSelect($dataselect, $nameSelect, $multi){

        if ($multi == 0){
            $select = "<select name='".$nameSelect."' id='".$nameSelect."'>";
        } else {
            $select = "<select name='".$nameSelect."' id='".$nameSelect."' multiple='multiple' size='5'>";
        }


        foreach($dataselect as $data){
            $select .= "<option value='".$data['id']."'>".$data['name']."</option>";
        }
        $select .= "</select>";

        return $select;
    }

    public static function getProgramLanguich(){

        $link = mysqli_connect(localhost, root, '', form);
        $query = "SELECT id, prog_lang AS name FROM programm_lang ORDER BY id";

        if(!$result = mysqli_query($link, $query)){
            return false;
        }

        $programm_lanquiges = mysqli_fetch_all($result, MYSQL_ASSOC);
        mysqli_free_result($result);

        return $programm_lanquiges;

        mysqli_close($link);
    }

    /*public static function getProfession($userLanguage){
        if($userLanguage == "en") $name = "name_en";
        if($userLanguage == "ru") $name = "name_ru";
        if($userLanguage == "uk") $name = "name_uk";

        $link = mysqli_connect(localhost, root, '', form);
        $query = "SELECT id, $name AS name FROM professions ORDER BY id";

        if(!$result = mysqli_query($link, $query)){
            return false;
        }

        $professions = mysqli_fetch_all($result, MYSQL_ASSOC);
        mysqli_free_result($result);

        return $professions;

        mysqli_close($link);

    }*/
}
?>