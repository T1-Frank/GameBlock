<!--
Template Name     : GameBlock
Author Name       : Francois Cloete
Author Email      : Francois@bookwise.co.za
Theme URL         : localhost/GameBlock
Theme Ver         : 1.1
-->

<?php 

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from product where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_product = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_product['p_cat_id'];
    
    $pro_title = $row_product['product_title'];
    
    $pro_price = $row_product['product_price'];
    
    $pro_desc = $row_product['product_desc'];
    
    $pro_img1 = $row_product['product_img1'];
    
    $pro_img2 = $row_product['product_img2'];
    
    $pro_img3 = $row_product['product_img3'];
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameBlock Online Shopping</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
</head>

<body>
    
    <!-- User Name Begins -->
    <div id="u_name">
        <!-- Container Begins -->
        <div class="container">
            <!-- Row Begin -->
            <div class="row">
                <!-- Col Begin -->
                <div class="col-md-12 offer">
                
                    <a href="#" class="btn btn-success btn-sm">
                    
                        <?php 
                        
                            if(!isset($_SESSION['customer_email'])){
                                
                                echo "Welcome: Guest";
                                
                            }else{
                                
                                echo "Welcome: " . $_SESSION['customer_email'] . "";
                                
                            }
                        
                        ?>
                    
                    </a>
                    
                </div>
                <!-- Col Ends -->
            </div>    
            <!-- Row Ends -->   
        </div>
        <!-- Container Ends -->
    </div>
    <!-- User Name Ends -->
    
    <!-- Top Begins -->
    <div id="top">
        <!-- Container Begins -->
        <div class="container">
            <!-- Row Begin -->
            <div class="row">
                <!-- Col Begin -->
                <div class="col-md-6 offer">

                    <a href="cart.php"><?php items(); ?> Items In Your Cart | Total Price <?php total_price(); ?></a>
                    
                </div>
                <!-- Col Ends -->
                
                <!-- Col Begin -->
                <div class="col-md-6">
                    <!-- Menu Begin -->
                    <ul class="menu">
                        <!-- Menu-List Begin -->
                        <li>
                            <?php
                            
                                if(!isset($_SESSION['customer_email'])){
                                    
                                    echo "<a href='customer_register.php'>Register</a>'";
                                    
                                }else{
                                    
                                    echo "<a href='customer/my_account.php?edit_account'>Edit Account</a>'";
                                    
                                }
                            
                            ?>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go to Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">
                            
                                <?php 
                                
                                   if(!isset($_SESSION['customer_email'])){
                                
                                        echo "<a href='checkout.php'>Login</a>";
                                
                                    }else{
                                
                                        echo "<a href='logout.php'>Logout</a>";
                                
                                    } 
                                
                                ?>
                            
                            </a>
                        </li>
                        <!-- Menu-List Ends -->
                    </ul>
                    <!-- Menu Ends -->    
                </div>
                <!-- Col Ends -->
            </div>    
            <!-- Row Ends -->   
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Top Ends -->

    <!-- Navbar Begin -->
    <div id="navbar" class="navbar navbar-default">
        <!-- Navbar Container Begin -->
        <div class="container">
            <!-- Navbar Header Begin -->
            <div class="navbar-header">
                <!-- Navbar Brand Begin -->
                <a href="index.php" class="navbar-brand home">
                    <!-- Site Logo -->
                    <img src="images/logo.png" alt="site-logo" class="hidden-xs">
                    <img src="images/logo.png" alt="site-logo" class="visible-xs">
                    <!-- Site Logo -->
                </a>
                <!-- Navbar Brand Ends -->
                
                <!-- Mobile Menu Button -->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
                <!-- Mobile Menu Button /-->
            </div>
            <!-- Navbar Header Ends -->
            
            <!-- Navbar Menu Begins -->
            <div class="navbar-collapse collapse" id="navigation">
                <!-- Nav Padding -->
                <div class="padding-nav">
                    <!-- Menu List Begin -->
                    <ul class="nav navbar-nav left">
                        <li class="<?php if($active=='Home') echo"active"; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php if($active=='Shop') echo"active"; ?>">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="<?php if($active=='Account') echo"active"; ?>">
                            
                            <?php
                            
                                if(!isset($_SESSION['customer_email'])){
                                    
                                    echo "<a href='checkout.php'>My Account</a>'";
                                    
                                }else{
                                    
                                    echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                                    
                                }
                            
                            ?>
                            
                        </li>
                        <li class="<?php if($active=='Cart') echo"active"; ?>">
                            <a href="cart.php">My Cart</a>
                        </li>
                        <li class="<?php if($active=='Contact') echo"active"; ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Menu List End -->
                </div>
                <!-- Nav Padding /-->
                
                <!-- My Cart -->
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> Items In Your Cart</span>
                </a>
                <!-- My Cart /-->
                
                <!-- Search -->
                <div class="navbar-collapse collapse right">
                    <!-- Search Button -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                    
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- Search Button -->
                </div>
                <!-- Search /-->
                
                <!-- Search Toggle -->
                <div class="collapse clearfix" id="search">
                    <!-- Search Form -->
                    <form method="get" action="results.php" class="navbar-form">
                        <!-- Form Input Group --> 
                        <div class="input-group">
                            <input type="" class="form-control" placeholder="Search Items" name="user_query" required>
                            
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>    
                        </div>
                        <!-- Form Input Group /-->
                    </form>
                    <!-- Search Form /-->
                </div>
                <!-- Search Toggle /-->
            </div>
            <!-- Navbar Menu Ends -->
        </div>
        <!-- Navbar Container Ends -->
    </div>
    <!-- Navbar Ends -->
    
    
    
</body>
</html>