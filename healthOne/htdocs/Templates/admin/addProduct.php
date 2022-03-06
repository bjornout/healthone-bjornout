<header>
    <?php
        include_once('../Templates/defaults/head.php');
    ?>
</header>
<div class="container-fluid background">
<div class="container_fluid d-flex justify-content-center">
    <?php
    global $categories;
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../public/index.php">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/admin/products">Product page</a></li>
        </ol>
    </nav>

    </div>
   <div class="riw gy-3 d-flex justify-content-center size">
   <form enctype="multipart/form-data" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="description">
        <input type="file" name="picture">
        <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option name="<?= $category->name?>" value="<?= $category->id?>"><?= $category->name?></option>
            <?php endforeach;?>
        </select>
        <input type="submit" name="verzenden" value="Send File">
    </form>

</div>
</div>

