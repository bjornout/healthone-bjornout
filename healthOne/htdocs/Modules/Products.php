<?php
function getProducts(int $categoryId)
{
    global $pdo;
    $query = $pdo->prepare(query: "SELECT * FROM product WHERE category_id = $categoryId");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Category'); 
    return $result;

}

function getProduct(int $productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $query->bindParam("id", $productId);
    $query->execute();
    $request = $query->fetch(PDO::FETCH_ASSOC);
    return $request;
}

function getAllproducts():array
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product ORDER BY category_id');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Product');
}

function deleteProduct(int $id) : void {
    global $pdo;
    $sth = $pdo->prepare('DELETE FROM product WHERE id = :id');
    $sth->bindParam('id', $id);
   $result =  $sth->execute();
}

function addProduct(string $name, string $description,  $picture, int $category_id): void 
{
    global $pdo;
    $picture='/'.$picture;
    $sth = $pdo->prepare('INSERT INTO product (`name`, `description`, `picture`, `category_id`) VALUES ( ?,?,?,?)');
    $sth->bindParam(1, $name);
    $sth->bindParam(2, $description);
    $sth->bindParam(3, $picture);
    $sth->bindParam(4, $category_id);
    $sth->execute();
}

function krijgCategories():array
{
    global $pdo;
    $categories = $pdo->query('SELECT * FROM category')->fetchALL(PDO::FETCH_CLASS, 'Category');
    return $categories;
}

function fileupload():bool
{
    global $message;
    //check file extension
    $allowed=['gif','png','jpg'];
    $filename=$_FILES['picture']['name']; //original filename
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if (!in_array($ext,$allowed) || exif_imagetype($_FILES['picture']['tmp_name'])===false) {
        $message="Sorry alleen gif,png of jpg files toegestaan";
        return false;
    }

    //rename file to unique name
    $target_dir= "img/categories/";
    $target_file= $_FILES['picture']['name'];
    do {
        $target_file=$target_dir.md5($target_file).".$ext";
    } while (file_exists($target_file));

    //move uploaded file
    if(move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
        $message= $target_file;
        return true;
    } else {
        $message.="Sorry, upload niet gelukt";
        return false;
    }
}
function isPost(){
    if( (isset($_POST['name'])) && (!empty($_POST['name'])) && 
        (isset($_POST['category'])) && (!empty($_POST['category'])) && 
        (isset($_POST['discription'])) && (!empty($_POST['discription'])) && 
        (isset($_FILES['fileToUpload'] ['tmp_name'])) && (!empty($_FILES['fileToUpload']['tmp_name']))  )
    {
        return true;
    } else
        return false;
}   

