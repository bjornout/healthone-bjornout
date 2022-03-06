 <?php
global $params;
// check if admin
if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
    switch ($params[2]) {
        case 'products';
        if(isset($params[3]) && isset($params[4])){
            $productId = $params[3];
            $delete = $params[4];
            if($delete) {
                deleteProduct($productId);
            }
        }
        $products = getAllproducts();
        include_once '../Templates/admin/products.php';
        break;
        $products = getAllproducts();
        include_once '../templates/admin/products.php';
        break;
        case 'addProduct';
            $categories = getCategories();
            if(isset($_POST['verzenden'])) {
                if(fileupload()){
                    $name = filter_input(INPUT_POST, 'name');
                    $description = filter_input(INPUT_POST, 'description');
                    $picture = $message;
                    $cat_id = filter_input(INPUT_POST, 'category_id');
                   addproduct($name, $description, $picture, $cat_id);
                }
        }
         include_once '../templates/admin/addProduct.php';
    break;
    }
}else {
    // if not admin
    include_once '../templates/404.php';
}
?>