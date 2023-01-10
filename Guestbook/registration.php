<?php
include_once "action.php";
include "html-parts/header.php";

$str_form = "<form  name='autoForm' action='registration.php' method='post' onSubmit='return overify_login(this);' >
 			 Логін: <input type='text' name='login'>
 			 Пароль: <input type='password' name='pas'>
 			 <input type='submit' name='go' value='Підтвердити'>
 		     </form>";
if (!isset($_POST ['go'])) {
	echo $str_form; 
}
else {
	if (!check_log($_POST ['login'])) { 
		if (registration($_POST ['login'], $_POST ['pas'])) {
			echo "Ви успішно зареєстровані!<br/>";
			echo "<a href='index.php'>Перегляд сайту</a><br/>";
			echo "<a href='admin_panel.php'>Увійти до адміністративної панелі</a><br/>";
		}
	}
	else {
		echo $str_form;
		echo "Користувач із таким ім'ям вже існує!";
	}
}
include "html-parts/footer.php";