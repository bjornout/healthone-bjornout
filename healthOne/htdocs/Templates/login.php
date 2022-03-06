
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
<?php
  include_once('defaults/menu.php');
?>

<div class="card">
    <div class="card-body">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="col-form-label">
                    Username:
                </label>
                <input type="text" name="username" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="password" class="col-form-lavel">
                    Password:
                </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </div>

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