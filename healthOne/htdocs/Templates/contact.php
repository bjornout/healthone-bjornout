<!DOCTYPE html>
<html>
<?php
    include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
    <header>
        <?php
            include_once ('defaults/menu.php');
        ?>
    </header>
    <main>
        <div class="container text">
            <div class="row">
                <div class="col-sm opn">
                    <h4>Openingstijden</h4>
                    maandag : 7:00 - 20:00 <br>
                    dinsdag : 8:00 - 20:00 <br>
                    woensdag : 7:00 - 20:00 <br>
                    donderdag : 8:00 - 20:00 <br>
                    vrijdag : 7:00 - 20:30 <br>
                    zaterdag : 8:00 - 13:00 <br>
                    zondag : 8:00 - 13:00
                </div>
                <div class="col-sm">
                    <img class="homeImage" src='/img/fitness.png' style="height:40vh"/>
                </div>
                <div class="col-sm">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.639007785454!2d4.330076816035862!3d51.995232982737576!2m3!1f0!2f0!3f
                    0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1sen!2snl!
                    4v1634121943047!5m2!1sen!2snl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <?php
            include_once ('defaults/footer.php');
        ?>
    </main>
</div>
</body>
</html>
