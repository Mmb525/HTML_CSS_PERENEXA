<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni Admin Dashboard</title>
    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLE SHEET CSS -->
    <link rel="stylesheet" href="Assets/Admin_Assets/style.css">
    <link rel="stylesheet" href="Assets/Admin_Assets/media_queries.css">

    <link rel="shortcut icon" href="Assets/images/favicon.png" type="image/x-icon">
    <script src="Assets/Admin_Assets/index.js"></script>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="Assets/images/favicon.png" alt="">
                    <h2><span class="danger">Furni</span></h2>
                </div>
                <div class="close" id="close_btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="Admin" class="active">
                    <span class="material-icons-sharp">
                        grid_view
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        perm_identity
                    </span>
                    <h3>Customers</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">assignment</span>
                    <h3>Order</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Product</h3>
                </a>
                <a href="Product_Upload">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Add Product</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>