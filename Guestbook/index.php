<?php
include_once "action.php";
include "html-parts/header.php";

$c = 0;
if (isset($_SESSION['user_login'])) {
    echo "<a href='admin_panel.php'>Увійти до адміністративної панелі</a><br/>";
    echo "<a href='action.php?action=logout'>Вийти з облікового запису</a><br/>";
} else {
    echo "<a href='autorize.php'>Увійти</a><br/>";
    echo "<a href='registration.php'>Зареєструватись</a><br/>";
}
$out = out(5);
echo "<hr>";
echo "<section class=\"messages\"><div class=\"messages__list\">";
if (count($out) > 0) {
    foreach ($out as $row) {
?>
        <div class="messages__item">
            <div class="message__publisher">Опубликовал: <span class="user__name"><?php echo $row['username']; ?></span></div>
            <div class="message__content"><?php echo $row['message']; ?></div>
            <div class="message__date">Дата публикации: <?php echo $row['date']; ?></div>
        </div>
<?php
    }
} 
else
{
    echo "В гостевой книге пока нет записей...<br>";
}
echo "</section>";

include "html-parts/footer.php";