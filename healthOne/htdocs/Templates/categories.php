<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container-fluid background">
    <?php
    //include_once('defaults/header.php');
    include_once('defaults/menu.php');
    //include_once('defaults/pictures.php');
    ?>

    <div class="row gy-3 images">
        <?php
            foreach ($categories as &$data) {
                echo "
                <div class='col-sm-4 col-md-3'>
                    <div class='card'>
                        <div class='card-body text-center'>
                            <a href='/categories/". $data->id ."'>
                                <img class='product-img img-responsive center-block cata' src='". $data->picture . "'/>
                            </a>
                            <div class='card-title mb-3'>". $data->name ."</div>
                        </div> 
    
                    </div>
                </div>
                ";
            }
        ?>
    </div>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>

