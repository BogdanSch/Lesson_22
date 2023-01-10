<?php
include_once "action.php";

$str_form = "<form name='autoForm' action='autorize.php' method='post' onSubmit='return overify_login(this);'>
    Логин: <input type='text' name='login'>
    Пароль: <input type='password' name='pas'>
    <input type='submit' name='go' value='Підтвердити'>
</form>";

ob_start();
if (!isset($_POST['go'])) {
    include "html-parts/header.php";
    echo $str_form;
} else {
    if (check_autorize($_POST['login'], $_POST['pas'])) {
        header("Location: admin_panel.php");
        ob_end_flush();
    } else {
        include "html-parts/header.php";
        echo $str_form; // распечатываем форму
        echo "Неправильне введення, спробуйте ще раз <br>";
    }
}
include "html-parts/footer.php";