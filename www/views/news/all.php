<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Новости из мира нумизматики</h1>
<a href="/form.php">
    <p>Добавить новость</p>
</a>

<?php foreach ($items as $item) : ?>
    <article>
        <h1>
            <a href="/views/article.php">
                <?php echo $item->title; ?>
            </a>
        </h1>
        <div><?php echo $item->text; ?></div>
        <div>
            <p>
                <?php echo $item->date; ?>
            </p>
            <p>
                <?php echo $item->author; ?>
            </p>
            <p>
                <a href="<?php echo $item->source; ?>">
                    <?php echo $item->source; ?>
                </a>
            </p>
        </div>
    </article>
<?php endforeach ?>

</body>
</html>