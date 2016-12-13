<!DOCTYPE html>

<?= $this->element("imports"); ?>
<?= $this->Html->css('matanatr.css') ?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <?= $this->Html->charset() ?>
        <?= $this->element('imports') ?>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>
    <body>
        <div class="container">
            <div class="container">
                <div id="color">
                    <li style="background-color: #73C2FB; margin-left: 15px;"></li>
                    <li style="background-color: #1E90FF"></li>
                    <li style="background-color: #007FFF"></li>
                    <li style="background-color: #00BFFF"></li>
                    <li style="background-color: #0070FF"></li>
                </div>

                <div class="container">
                    <div align="center" class="" style="margin-top: 25px;">
                        <p id="name">Anush Mattapalli</p>
                        <p id="school"><i>Georgia Institute of Technology <span style="color: #1E90FF">|</span>
                                Class of 2018</i></p>
                    </div>
                    <div align="center">
                        <hr id="hr1" noshade="true" color="#DDDDDD">
                    </div>
                    <p id="about" style="width:80%;" class="moveRight marbot"><b>About me:</b> I am a rising junior at georgia
                        tech looking to export my potential into a formidable company!</p>
                    <div id="factDiv">
                        <p id="facts" class="moveRight marbot"><b>Two Truths and a Lie:</b></p>
                        <p class="marbot moveRight martop">1. I am a black belt in tae-kwon-do</p>
                        <p class="marbot moveRight martop">2. I have been to 33 Different states in the country </p>
                        <p class="marbot moveRight martop">3. I can speak 3.5 languages.</p>
                    </div>
                </div>


            </div>


        </div>
    </body>
</html>