<?php

include "db.php";
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POINT OF SALE</title>

    <!-- Icons -->
    <link rel="stylesheet" href="assets/icons/font/bootstrap-icons.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg mb-3">
        <div class="container">
            <div class="navbar-nav gap-3">
                <a class="nav-link" href="index.php?page=home">Home</a>
                <a class="nav-link" href="index.php?page=product">Products</a>
                <a class="nav-link" href="index.php?page=order">Orders</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="nav-link text-danger" href="index.php">Logout</a>
            </div>
        </div>
    </nav>

    <?php

    $page = isset($_GET['page']) ? $_GET['page'] : '';

    switch ($page) {
            // home
        case 'home':
            include "pages/home/index.php";
            break;
            // products
        case 'product':
            include "pages/product/index.php";
            break;
        case 'add_product':
            include "pages/product/add.php";
            break;
        case 'edit_product':
            include "pages/product/edit.php";
            break;
            // orders
        case 'order':
            include "pages/order/index.php";
            break;
        case 'detail_order':
            include "pages/order/detail.php";
            break;
            // auth
        default:
            include "pages/auth/login.php";
            break;
    }

    ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>