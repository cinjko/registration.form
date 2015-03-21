<?php
// print_r("sdfgs <br />" );
// print_r($lang);die;

?>
<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta charset="UTF-8">
	<title><?php echo $lang['TITLE']?></title>
	<script type="text/javascript" src="./js/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="./js/validation.js"></script>
	<link rel="stylesheet" href="css/error.css"/>
</head>
<body>
	<div class="wrapper">
		<p class="change_lang">
			<a href="index.php?id=en">Eng</a>
			<a href="index.php?id=uk">Укр</a>
			<a href="index.php?id=ru">Рос</a>
		</p><br/>
		<form action="<?php $action;?>" method="post" class="registration" name="registration" enctype="multipart/form-data">

			<div class="main_info">
				<input type="text" class="first_name" id="first_name" name="first_name" placeholder="<?php echo $lang['USER_FIRST_NAME'];?>"><br />
				<input type="text" id= "last_name" name="last_name" placeholder="<?php echo $lang['USER_LAST_NAME']?>"><br>
				<input type="text" id= "email" name="Email" placeholder="<?php echo $lang['USER_EMAIL']?>"><br>
				<input type="password" id= "password" name="password" placeholder="<?php echo $lang['USER_PASSWORD']?>"><br>
				<input type="text" id= "login" name="Login" placeholder="<?php echo $lang['USER_LOGIN']?>"><br>
			</div><br>

			<div class="info">
				<?php echo $lang['INFO'];?><br>
				<input type="checkbox" id="infosource_internet" name="infosource[]" value="internet"/><label for="infosource_internet"><?php echo $lang['INFO_SOURCE_INTERNET'];?></label>
				<input type="checkbox" id="infosource_friends" name="infosource[]" value="friends"/><label for="infosource_friends"><?php echo $lang['INFO_SOURCE_FRIENDS'];?></label>
				<input type="checkbox" id="infosource_advertising" name="infosource[]" value="advertising"/><label for="infosource_advertising"><?php echo $lang['INFO_SOURCE_ADVERTISING'];?></label><br>
			</div><br>

			<div>
				<?php echo $lang['USER_POSITION_JOB'];?><br>
				<input type="radio" name="position_job" value="1"/><?php echo $lang['POSITION_JOB_PROGRAMMER'];?>
				<input type="radio" name="position_job" value="2"/><?php echo $lang['POSITION_JOB_MANAGER'];?>
				<input type="radio" name="position_job" value="3"/><?php echo $lang['POSITION_JOB_DESIGNER'];?><br>
			</div><br>

			<div id="country_form1">
				<?php echo $lang['COUNTRY'];?><br>
				<?php echo $selectCountry;?>
			</div><br>

			<div class="program_language">
				<?php echo $lang['USER_PROGRAMMING_LANG_KNOWS']?><br>
				<?php echo $selectProfession;?>
			</div><br>

			<div class="user_image">
				<input type="file" name="Foto" placeholder=""/>
			</div><br />

			<div class="uploadform">
					<input type="file" name="userfile"/><br />
			</div><br/>

			<input type="button" name="submit" onclick="validation(); return false;" value="<?php echo $lang['SEND']?>"/>
		</form>
	</div>
</body>
</html>