<?php
include_once "action.php";
include "header.php";

$out = out(5);
print_r($out);
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
include "footer.php";
