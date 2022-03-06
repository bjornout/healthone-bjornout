<div class="navColor">
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">
            <img src="../../../img/Logo-Health-One.png" alt="image not found">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">sportapparaat</a>
                </li>
                <li class="nav-item">
                    <?php
                        if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
                        echo"
                        <li class='nav-item'>
                            <a class='nav-link' href='/admin/products'>admin</a>
                        </li>
                        ";
                        }
                         else{
                            echo"
                            <li class='nav-item'>
                             <a class='nav-link' href='/signup'>signup</a>
                            </li>
                            ";
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php
                if(isset($_SESSION['login'])){
                    echo"
                    <li class='nav-item'>
                        <a class='nav-link' href='/logout'>logout</a>
                    </li>
                    ";
                }
                else{
                    echo"
                    <li class='nav-item'>
                        <a class='nav-link' href='/login'>inloggen</a>
                    </li>
                    ";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<div>