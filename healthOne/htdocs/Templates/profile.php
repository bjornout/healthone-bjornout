<!DOCTYPE html>
<html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
        <?php
        include_once('defaults/menu.php');
        ?>
        <?php if (!empty($message)): ?>
            <div class="alert alert-succes" role="alert">
                <?=$message ?>
            </div>
        <?php endif;?>
        <form class="row g-3" method="post">
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" readonly="readonly" 
                value="<?php if(isset($_SESSION['user']->email)) {echo $_SESSION['user']->email;} else {echo "";} ?>">
            </div>
            <div class="col-md-6">
                <label for="inputFirstName" class="form-label">First name</label>
                <input type="text" name="firstName" class="form-control" id="inputFirstName" readonly="readonly" 
                value="<?php if(isset($_SESSION['user']->first_name)) {echo $_SESSION['user']->first_name;} else {echo "";} ?>" placeholder="Jan">
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Last name</label>
                <input type="text" name="lastName" class="form-control" id="inputLastName" readonly="readonly" 
                value="<?php if(isset($_SESSION['user']->last_name)) {echo $_SESSION['user']->last_name;} else {echo "";} ?>" placeholder="Klaassen"> 
            </div>
            <div class="col-12">
                <button type="submit" name="profile" class="btn btn-primary">Aanpassen profiel</button>
            </div>
        </form>
        <hr>
        <?php
        include_once('defaults/footer.php');
        ?>
        </div>
    </body>
</html>