<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Новость дня!</h1>
<article>
    <h3>
        <?php echo $item['title']; ?>
    </h3>
    <div><?php echo $item['text']; ?></div>
    <p>
        Дата публикации: <?php echo $item['date']; ?>
        <br>
        Автор новости: <?php echo $item['author']; ?>
        <br>
        Источник:
        <a href="<?php echo $item['source']; ?>">
            <?php echo $item['source']; ?>
        </a>
    </p>
    <p>
        <a href="/index.php">
            На главную
        </a>
    </p>
</article>
</body>
</html>
