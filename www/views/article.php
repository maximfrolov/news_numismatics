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
        <?php echo $article['title']; ?>
    </h3>
    <div><?php echo $article['text']; ?></div>
    <p>
        Дата публикации: <?php echo $article['date']; ?>
    </p>
    <p>
        По материалам:
        <a href="<?php echo $article['source']; ?>">
            <?php echo $article['source']; ?>
        </a>
    </p>
</article>
</body>
</html>
