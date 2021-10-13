<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{
    

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameBlock Account</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css?v=<?php echo time(); ?>">
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

                    <a href="../checkout.php"><?php items(); ?> Items In Your Cart | Total Price <?php total_price(); ?></a>
                    
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
                                    
                            echo "<a href='../customer_register.php'>Register</a>'";
                                    
                        }else{
                                    
                            echo "<a href='my_account.php?edit_account'>Edit Account</a>'";
                                    
                        }
                            
                    ?>
                        </li>
                        <li>
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Go to Cart</a>
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
                <a href="../index.php" class="navbar-brand home">
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
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">My Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Menu List End -->
                </div>
                <!-- Nav Padding /-->
                
                <!-- My Cart -->
                <a href="../cart.php" class="btn navbar-btn btn-primary right">
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
    
    <!-- Content Begin -->
    <div id="content">
        <!-- Bootstrap Container Begin -->
        <div class="container">
            <!-- Bootstrap Column md-12 Begin -->
            <div class="col-md-12">
                <!-- Bootstrap BreadCrumb Begins -->
                <ul class="breadcrumb">
                    <!-- BreadCrumb li Begins -->
                    <li>
                       <a href="index.php">Home</a> 
                    </li>
                    
                    <li>
                        My Account
                    </li>
                    <!-- BreadCrumb li Ends -->
                </ul>
                <!-- Bootstrap BreadCrumb Ends -->
            </div>
            <!-- Bootstrap Column md-12 Ends -->
            
            <!-- Bootstrap Column md-3 Begins -->
            <div class="col-md-3">
                <!-- Include Sidebar.php -->
                <?php 
                    
                    include("includes/sidebar.php");
                
                ?>
                <!-- Include Sidebar.php /-->
            </div>
            <!-- Bootstrap Column md-3 Ends -->
            
            <!-- Bootstrap Column md-9 Begins -->
            <div class="col-md-9">
                <!-- Box Begin -->
                <div class="box">
                    <?php 
                    
                    if (isset($_GET['my_orders'])){
                        include("my_orders.php");
                    }
                    
                    ?>
                    
                    <?php 
                    
                    if (isset($_GET['pay_offline'])){
                        include("pay_offline.php");
                    }
                    
                    ?>
                    
                    <?php 
                    
                    if (isset($_GET['edit_account'])){
                        include("edit_account.php");
                    }
                    
                    ?>
                    
                    <?php 
                    
                    if (isset($_GET['change_pass'])){
                        include("change_pass.php");
                    }
                    
                    ?>
                    
                    <?php 
                    
                    if (isset($_GET['delete_account'])){
                        include("delete_account.php");
                    }
                    
                    ?>
                </div>
                <!-- Box Ends -->
            </div>
            <!-- Bootstrap Column md-9 Ends -->
        </div>
        <!-- Bootstrap Container Ends -->
    </div>
    <!-- Content Ends -->
    
    <!-- Include Footer.php -->
    <?php 
        
        include("includes/footer.php");
    
    ?>
    <!-- Include Footer.php /-->
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>

<?php 

}

?>