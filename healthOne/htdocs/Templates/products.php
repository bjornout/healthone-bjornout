<!DOCTYPE html>
<html>
<?php
    include_once('defaults/head.php');
?>
<body>
<div class="container-fluid background">
    <?php
    include_once('defaults/menu.php');
    ?>
    <div class="row gy-3 images imgs">
        <?php
            foreach ($products as &$data) {
                echo"<div class='col-sm-3 col-md-4'>";
                echo"<div class='card prod' >"; 
                echo"<div class='card-body text-center'>";
                echo "<a href='" . $categoryId . "/product/" . $data->id . "'>";
                echo"<img class='product-img img-responsive center-block cata' src=". $data->picture  . ">";
                echo"<h5>" . $data->name . "</h5>"; 
                echo "</div>";
                echo "</div>";
                echo"</div>";
            }
            echo"</div>";
        ?>
    </div>
    <?php
        include_once('defaults/footer.php');
    ?>
</div>
</body>
</html>
