<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/login.php';
require '../Modules/Review.php';

$db = new PDO("mysql:host=localhost;dbname=healthone","root","");

define("DOC_ROOT", realpath(dirname(__DIR__)));
define("TEMPLATE_ROOT", realpath(DOC_ROOT . "/templates"));

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";
session_start();
switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';        
        if (isset($_GET['category_id'])) {
            $categoryId = $_GET['category_id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);

            if (isset($_GET['product_id'])) {
                $productId = $_GET['product_id'];
                $product = getProduct($productId);
                $titleSuffix = ' | ' . $product['name'];
                

                if(isset($_POST['submit'])) {
                    $name = filter_input(INPUT_POST, 'name');
                    $content = strip_tags(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS));
                    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT);
                    saveReview($name, $content, $rating, $productId);
                }
                include_once "../Templates/product.php";

            } else {
                include_once "../Templates/products.php";
            }
        } else {
            $categories = getCategories();
            include_once "../Templates/categories.php";
        }
        break;
        case 'contact':
            $titleSuffix = ' | contact';
            include_once "../Templates/contact.php";
            break;
            case 'login':
                $titleSuffix = ' | login';
                if(isset($_POST['login'])){
                    $username = filter_input(INPUT_POST, "username");
                    $password = filter_input(INPUT_POST, "password");
                    $user = checkLogin($username, $password);
                    if($user === false){
                        $error = "username or password is invalid!";
                        echo $error;
                    }
                    else {
                        $_SESSION['email'] = $user->email;
                        $_SESSION['first-name'] = $user->first_name;
                        $_SESSION['last-name'] = $user->last_name;
                        $_SESSION['role'] = $user->role;
                        $_SESSION['login'] = true;
                        header("Location: /home");
                    }
                }
                include_once "../Templates/login.php";
                break;
                case 'signup':
                    $titleSuffix = ' | signup';
                    if(isset($_POST['send'])) {
                        $userName = filter_input(INPUT_POST, 'userName');
                        $password = strip_tags(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS));
                        saveLogin($userName, $password);
                    }
                
                    include_once "../Templates/signup.php";
                break;
                    
                 case 'logout':
                    $titleSuffix = ' | logout';
                    include_once "../Templates/logout.php";
                break;

                    case 'admin':
                        include_once 'admin.php';
                    break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
