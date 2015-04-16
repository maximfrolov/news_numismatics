<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Новости из мира нумизматики</h1>
<a href="/form.php">
    Добавить новость
</a>

<?php foreach ($items as $item) : ?>
    <article>
        <h1><?php echo $item->title; ?></h1>
        <div><?php echo $item->text; ?></div>
        <div>
            <p>
                <?php echo $item->date; ?>
            </p>
            <p>
                <?php echo $item->author; ?>
            </p>
            <p>
                <?php echo $item->source; ?>
            </p>
        </div>
    </article>
<?php endforeach ?>

</body>
</html>