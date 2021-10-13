<!-- Footer Begins -->
<div id="footer">
    <!-- Bootstrap Container Begins -->
    <div class="container">
        <!-- Bootstrap row Begins -->
        <div class="row">
            <!-- Bootstrap Column sm-6/md-3 Begins -->
            <div class="col-sm-6 col-md-3">
                
                <!-- Title -->
                <h4>Pages</h4>
                <!-- Title /-->
                
                <!-- ul Begins --> 
                <ul>
                    <!-- li Begins -->
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                    <!-- li Ends -->
                </ul>
                <!-- ul Ends -->
                
                <hr>
                
                <!-- User Section -->
                <h4>User Section</h4>
                <!-- User Section /-->
                
                <!-- ul Begins -->
                <ul>
                    <!-- li Begins -->
                    <li>        
                        <?php
                            
                            if(!isset($_SESSION['customer_email'])){
                                    
                                echo "<a href='checkout.php'>Login</a>'";
                                    
                            }else{
                                    
                                echo "<a href='customer/my_account.php?my_orders'>My Account</a>'";
                                    
                            }
                            
                        ?>
                    </li>    
                    <li>
                        <?php
                            
                            if(!isset($_SESSION['customer_email'])){
                                    
                                echo "<a href='customer_register.php'>Register</a>'";
                                    
                            }else{
                                    
                                echo "<a href='customer/my_account.php?edit_account'>Edit Account</a>'";
                                    
                            }
                            
                        ?>
                    </li>
                    <!-- li Ends -->
                </ul>
                <!-- ul Ends -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div>
            <!-- Bootstrap Column sm-6/md-3 Ends -->
            
            <!-- Bootstrap Column sm-6/md-3 Begins -->
            <div class="col-sm-6 col-md-3">
                
                <!-- Top Product Header -->
                <h4>Top Products Categories</h4>
                <!-- Top Product Header /-->
                
                <!-- ul Begins -->
                <ul>
                    <?php 
                    
                    $get_p_cats = "select * from product_categories LIMIT 0,6";
                    
                    $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?p_cat=$p_cat_id'>
                                
                                    $p_cat_title
                                
                                </a>
                            
                            </li>
                        
                        ";
                        
                    }
                    
                    ?>
                </ul>
                <!-- ul Ends -->
                
                <hr class="hidden-md hidden-lg">
                
            </div>
            <!-- Bootstrap Column sm-6/md-3 Ends -->
            
            <!-- Bootstrap Column sm-6/md-3 Begins -->
            <div class="col-sm-6 col-md-3">
                
                <!-- Find Us Header -->
                <h4>Find Us</h4>
                <!-- Find Us Header /-->
                
                <!-- p Begins -->
                <p>
                    <strong>GameBlock inc.</strong>
                    <br/>Johannesburg
                    <br/>South Africa
                    <br/>+27 11 462 7441
                    <br/>Customer-support@gameblock.co.za
                    <br/><strong>W7MSRF657</strong>
                </p>
                
                <!-- p Ends -->
                
                <!-- Contact Page Link -->
                <a href="../contact.php">Our contact Page</a>
                <!-- Contact Page Link /-->
                
                <hr class="hidden-md hidden-lg">
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
            <!-- Bootstrap Column sm-6/md-3 Ends -->
            
            <!-- Bootstrap Column sm-6/md-3 Begins -->
            <div class="col-sm-6 col-md-3">
                
                <!-- Top Product Header -->
                <h4>Top Categories</h4>
                <!-- Top Product Header /-->
                
                <!-- ul Begins -->
                <ul>
                    <?php 
                    
                    $get_cats = "select * from categories LIMIT 0,6";
                    
                    $run_cats = mysqli_query($con,$get_cats);
                    
                    while($row_cats=mysqli_fetch_array($run_cats)){
                        
                        $cat_id = $row_cats['cat_id'];
                        
                        $cat_title = $row_cats['cat_title'];
                        
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?cat=$cat_id'>
                                
                                    $cat_title
                                
                                </a>
                            
                            </li>
                        
                        ";
                        
                    }
                    
                    ?>
                </ul>
                <!-- ul Ends -->
            </div>
            <!-- Bootstrap Column sm-6/md-3 Ends -->
        </div>
        <!-- Bootstrap row Ends -->
    </div>
    <!-- Bootstrap Container Ends -->
</div>
<!-- Footer Ends -->

<!-- Copyright Begins -->
<div id="copyright">
    <!-- Bootstrap Container Begin -->
    <div class="container">
        <!-- Bootstrap Column sm-6/left Begin -->
        <div class="col-sm-6">
            <p class="pull-left">&copy; 2020 GameBlock All Rights Reserved</p>
        </div>
        <!-- Bootstrap Column sm-6/left Ends -->
        
        <!-- Bootstrap Column sm-6/right Begin -->
        <div class="col-sm-6">
            <p class="pull-right">Theme by: <a href="#">Francois Cloete</a></p>
        </div>
        <!-- Bootstrap Column sm-6/right Ends -->
    </div>
    <!-- Bootstrap Container Ends -->
</div>
<!-- Copyright Ends -->