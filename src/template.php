<html>
    <head>
        <title><?= $title ?> | 掲示板『パワー』</title>
        <meta name="description" content="<?= $description ?>">
        <link rel="stylesheet" type="text/css" href="generic_styles.css" />
        <?php if (isset($sss)): ?>
            <?php foreach ($sss as $ss): ?>
                <link rel="stylesheet" type="text/css" href="<?= $ss ?>.css" />
            <?php endforeach ?>
        <?php endif ?>
    </head>
    <body>
        <?php require $layout_php ?>
    </body>
</html>