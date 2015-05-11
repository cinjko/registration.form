<?php
// print_r("sdfgs <br />" );
// print_r($lang);die;

?>
<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta charset="UTF-8">
	<title><?php echo $lang['TITLE_REGISTRATION']?></title>
	<script type="text/javascript" src="./js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="./js/validation.js"></script>
	<link rel="stylesheet" href="css/registration.css"/>
</head>
<body>
	<div class="wrapper">
		<p class="change_lang">
			<a href="registration.php?id=en">Eng</a>
			<a href="registration.php?id=uk">Укр</a>
			<a href="registration.php?id=ru">Рос</a>
		</p><br/>
		<form  method="post" class="registration" name="registration" enctype="multipart/form-data">

			<div class="main_info">
				<input type="text" id="first_name" class="text" name="first_name" placeholder="<?php echo $lang['USER_FIRST_NAME'];?>"><br />
				<p id="error_first_name" class="error_first_name" name="error_first_name" ><?php echo $lang['BAD_FIRST_NAME'];?></p>
				<input type="text" id= "last_name"class="text" name="last_name" placeholder="<?php echo $lang['USER_LAST_NAME']?>"><br>
				<p id="error_last_name" class="error" name="error_last_name" ><?php echo $lang['BAD_LAST_NAME'];?></p>
				<input type="text" id= "email" class="text" name="Email" placeholder="<?php echo $lang['USER_EMAIL']?>"><br>
				<p id="error_email" class="error" name="error_email" ><?php echo $lang['BAD_EMAI'];?></p>
			</div><br>

			<div class="info_source">
				<?php echo $lang['INFO'];?><br>
				<input type="checkbox" id="infosource_internet" name="infosource[]" value="internet"/><label for="infosource_internet"><?php echo $lang['INFO_SOURCE_INTERNET'];?></label>
				<input type="checkbox" id="infosource_friends" name="infosource[]" value="friends"/><label for="infosource_friends"><?php echo $lang['INFO_SOURCE_FRIENDS'];?></label>
				<input type="checkbox" id="infosource_advertising" name="infosource[]" value="advertising"/><label for="infosource_advertising"><?php echo $lang['INFO_SOURCE_ADVERTISING'];?></label>
			</div><br>

			<div class="job">
				<?php echo $lang['USER_POSITION_JOB'];?><br /   >
				<input type="radio" name="position_job" value="1"/><?php echo $lang['POSITION_JOB_PROGRAMMER'];?>
				<input type="radio" name="position_job" value="2"/><?php echo $lang['POSITION_JOB_MANAGER'];?>
				<input type="radio" name="position_job" value="3"/><?php echo $lang['POSITION_JOB_DESIGNER'];?>
			</div><br />

			<div id="country_form1">
				<?php echo $lang['COUNTRY'];?><br>
				<?php echo $selectCountry;?>
			</div><br/>
			<div class="program_language">
				<?php echo $lang['USER_PROGRAMMING_LANG_KNOWS']?><br />
				<?php echo $selectProfession;?>
			</div><br/>

			<div class="user_image">
				<?php echo($lang['USER_IMAGE'])?>
				<input type="file" id="file" name="Foto" placeholder=""/>
			</div>

			<div class="upload">
				<?php echo($lang['USER_CV'])?>
				<input type="file" id="file" name="userfile"/><br />
			</div>

			<div id="reg_data">
				<input type="text" id="login" class="text" name="Login" placeholder="<?php echo $lang['USER_LOGIN']?>"><br>
				<p id="error_login" class="error_login" name="error_login" ><?php echo $lang['BAD_LOGIN'];?></p>
				<input type="password" id= "password" class="text" name="password" placeholder="<?php echo $lang['USER_PASSWORD']?>"><br>
				<p id="error_password" class="error_password" name="error_password" ><?php echo $lang['BAD_PASSWORD'];?></p>
				<input type="password" id="repeated_password" class="text" placeholder="<?php echo $lang['REPEATED_USER_PASSWORD']?>"/><br/>
			</div>

			<p class="reffer">
				<input type="button" name="submit" id="submit" value="<?php echo $lang['SING_UP']?>"/>
				<a class="linkSingIn" href="index.php"><?php echo($lang['LINK_LOGIN']);?></a>
			</p>
		</form>
	</div>
</body>
</html>