<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<!-- Bootstrap Navbar Begins -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- Bootstrap Nav-Header Begins -->
    <div class="navbar-header">
        <!-- Bootstrap Button-Toggle -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>
        <!-- Bootstrap Button-Toggle /-->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div>
    <!-- Bootstrap Nav-Header Ends -->
    
    <!-- Bootstrap ul-Navbar Begins -->
    <ul class="nav navbar-right top-nav">
        <!-- Dropdown li -->
        <li class="dropdown">
            <!-- Dropdown Toggle Begins -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>
            </a>
            <!-- Dropdown Toggle Ends -->
            
            <!-- Dropdown Menu Begins -->
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">
                        <i class="fa fa-fw fa-user"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="index.php?view_product">
                        <i class="fa fa-fw fa-envelope"></i> Products
                        <span class="badge"><?php echo $count_products; ?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_customers">
                        <i class="fa fa-fw fa-users"></i> Customers 
                        <span class="badge"><?php echo $count_customers; ?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_cats">
                        <i class="fa fa-fw fa-gear"></i> Product Categories
                        <span class="badge"><?php echo $count_p_categories; ?></span>
                    </a>
                </li>
                
                <li class="divider"></li>
                
                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i> LogOut
                    </a>
                </li>
            </ul>
            <!-- Dropdown Menu Ends -->
            
        </li>
        <!-- Dropdown li /-->
    </ul>
    <!-- Bootstrap ul-Navbar Ends-->
    
    <!-- Bootstrap Collapse-Navbar Begins -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <!-- Side Nav Begins -->
        <ul class="nav navbar-nav side-nav">
            <!-- li Begins -->
            <li>
                <a href="index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </a>
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                    <i class="fa fa-fw fa-tag"></i> Products
                    <i class="fa fa-fw fa-caret-down"></i> 
                </a>
                
                <ul id="products" class="collapse">
                    <!-- li Begins -->
                    <li>
                        <a href="index.php?insert_product">Insert Product</a>
                    </li>
                    <li>
                        <a href="index.php?view_product">View Products</a>
                    </li>
                    <!-- li Ends -->
                </ul>
                
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                    <i class="fa fa-fw fa-edit"></i> Products Categories
                    <i class="fa fa-fw fa-caret-down"></i> 
                </a>
                
                <ul id="p_cat" class="collapse">
                    <!-- li Begins -->
                    <li>
                        <a href="index.php?insert_p_cat">Insert Product Categories</a>
                    </li>
                    <li>
                        <a href="index.php?view_p_cats">View Products Categories</a>
                    </li>
                    <!-- li Ends -->
                </ul>
                
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                    <i class="fa fa-fw fa-book"></i> Categories
                    <i class="fa fa-fw fa-caret-down"></i> 
                </a>
                
                <ul id="cat" class="collapse">
                    <!-- li Begins -->
                    <li>
                        <a href="index.php?insert_cat">Insert Category</a>
                    </li>    
                    <li>    
                        <a href="index.php?view_cats">View Category</a>
                    </li>
                    <!-- li Ends -->
                </ul>
                
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#slides">
                    <i class="fa fa-fw fa-gear"></i> Slides
                    <i class="fa fa-fw fa-caret-down"></i> 
                </a>
                
                <ul id="slides" class="collapse">
                    <!-- li Begins -->
                    <li>
                        <a href="index.php?insert_slide">Insert Slides</a>
                    </li>
                    <li>
                        <a href="index.php?view_slides">View Slides</a>
                    </li>
                    <!-- li Ends -->
                </ul>
                
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="index.php?view_customers">
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a>
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-gift"></i> View Orders
                </a>
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="index.php?view_payments">
                    <i class="fa fa-fw fa-money"></i> View Payments
                </a>
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                    <i class="fa fa-fw fa-user"></i> Users
                    <i class="fa fa-fw fa-caret-down"></i> 
                </a>
                
                <ul id="users" class="collapse">
                    <!-- li Begins -->
                    <li>
                        <a href="index.php?insert_users">Insert Users</a>
                    </li>
                    <li>
                        <a href="index.php?view_users">View Users</a>
                    </li>
                    <li>
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>">Edit User Profile</a>
                    </li>
                    <!-- li Ends -->
                </ul>
                
            </li>
            <!-- li Ends -->
            
            <!-- li Begins -->
            <li>
                <a href="logout.php">
                    <i class="fa fa-fw fa-power-off"></i> LogOut
                </a>
            </li>
            <!-- li Ends -->
            
        </ul>
        <!-- Side Nav Ends -->
    </div>
    <!-- Bootstrap Collapse-Navbar Ends -->
    
</nav>
<!-- Bootstrap Navbar Ends -->


<?php } ?>