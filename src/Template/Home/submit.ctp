<!DOCTYPE html>
<html>
    <head>
        <?= $this->element('imports'); ?>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>
    <body class="home">
        <?= $this->element('navigation'); ?>
        <?= "thanks!" ?>
    </body>
</html>