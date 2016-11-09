<!DOCTYPE html>
<html>
    <head>
        <?= $this->element('imports') ?>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>

    <body class="home">
        <?= $this->element('navigation'); ?>

        <div style="margin-top: 100px">
            <form method = "post" action = "matanatr/submit" />
            Name:<br>
            <input type = "text" name = "name">
            Age:<br>
            <input type = "text" name = "age">

            <input type = "submit" value = "submit">


            <?= $this->element('footer'); ?>
        </div>
    </body>
</html>