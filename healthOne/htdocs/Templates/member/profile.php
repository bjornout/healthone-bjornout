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

            <h4> Member Profile</h4>
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>email</td>
                    <td><?=$_SESSION['user']->email?></td>
                </tr>
                <tr>
                    <td>firstname</td>
                    <td><?=$_SESSION['user']->first_name?></td>
                </tr>
                <tr>
                    <td>lastname</td>
                    <td><?=$_SESSION['user']->last_name?></td>
                </tr>
                </tbody>
            </table>
            <a type="button" class="btn btn-success btn-sm px-3" href="/member/editprofile">
                profile aanpassen
            </a>
            <a type="button" class="btn btn-danger btn-sm px-3" href="/member/changepassword">
                password aanpassen
            </a>
            <hr>
            <?php
                include_once('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
