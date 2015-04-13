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
    <div>
    <input type="text" name="title">
    </div>
    Текст новости:
    <div>
    <textarea cols="50" rows="10" name="text"></textarea>
    </div>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
    Автор новости:
    <div>
    <input type="text" name="author">
    </div>
    Ссылка на источник:
    <div>
    <input type="text" name="source">
    </div>
    <div>
        <p>
            <input type="submit" name="add" value="Добавить">
        </p>
    </div>
</form>
    <p><a href="/index.php">
        Назад
    </a>
</p>
</body>
</html>