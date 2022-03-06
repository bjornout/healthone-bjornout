
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<?php
    include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
    <?php
    include_once('defaults/menu.php');
    ?>  
    <div class="signupFrm">
    <div class="wrapper">
    <form method="post" action="" class="form">
      <h1 class="title">Sign up</h1>

      <div class="inputContainer">
        <input type="text" name="userName" class="input" placeholder="a">
        <label for="" class="label">Username</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="password" class="input" placeholder="a">
        <label for="" class="label">Password</label>
      </div>
      <input type="submit" name="send" class="submitBtn" value="Sign up">
    </form>
    </div>
  </div>
    <?php
    ?>

    <?php
        include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>