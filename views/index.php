<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Новости из мира нумизматики</h1>
<?php foreach ($news as $article) : ?>
<article>
    <h3>
        <a href="/article.php?id=<?php echo $article['id']; ?>">
            <?php echo $article['title']; ?>
        </a>
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
<?php endforeach; ?>
</body>
</html>
