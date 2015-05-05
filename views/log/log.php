<?php
/**
 * Created by PhpStorm.
 * User: cinjko
 * Date: 3/22/2015
 * Time: 10:34 PM
 */


?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang['TITLE_LOG']?></title>
    <script type="text/javascript" src="./js/jquery-2.1.3.js"></script>
    <script type="text/javascript" src="./js/validation.js"></script>
    <link rel="stylesheet" href="./css/log.css"/>
</head>
<body>
    <div class="wrapper" id="wrapper">
        <p class="change_lang">
            <a href="index.php?id=en">Eng</a>
            <a href="index.php?id=uk">Укр</a>
            <a href="index.php?id=ru">Рос
        </p><br/>

        <form action="<?php $action;?>" method="post" class="login" name="login" enctype="multipart/form-data">

            <div class="username">
                <input type="text" name="Email" id="email" placeholder="<?php echo $lang['USER_EMAIL']?>"/>
            </div><br/>

            <div class="password"></a>
                <input type="password" name="password" id="password" placeholder="<?php echo $lang['USER_PASSWORD']?>"/>
            </div><br/>

            <div id="button">
                <input type="button" class="green" id="login_button" value="<?php echo($lang['SING_IN'])?>">
            </div>

        </form>

        <p class="reffer">
            <a class="linkRegistrForm" href="registration.php"><?php echo($lang['LINK_REGISTRATION']);?></a>
        </p>
    </div>
</body>
</html>
