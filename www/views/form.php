<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title>Добавление новости</title>
</head>
<body>
<?php

if (!empty($_SESSION['error'])) {          // если есть ошибка при отправке формы, то
    echo '<br>' . $_SESSION['error'];      // выводим пользователю эту ошибку
    unset($_SESSION['error']);             // удаляем эту ошибку из сессии
}

?>
<form method="post" action="/form_handler.php">
    Название новости:
    <br>
    <input type="text" name="title">
    <br>
    Текст новости:
    <br>
    <textarea cols="50" rows="10" name="text"></textarea>
    <br>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
    Автор новости:
    <br>
    <input type="text" name="author">
    <br>
    Ссылка на источник:
    <br>
    <input type="text" name="source">
    <br>
    <p>
        <input type="submit" name="add" value="Добавить">
    </p>
</form>
<a href="/index.php">
    Назад
</a>
</body>
</html>