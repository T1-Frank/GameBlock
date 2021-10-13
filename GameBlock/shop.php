<?php 
    
    $active='Shop';
    include("includes/header.php");

?>
    
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
                        Shop
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
                
                <?php 
                
                    if(!isset($_GET['p_cat'])){
                        
                        if(!isset($_GET['cat'])){
                
                                echo "

                                <!-- Box Begin -->
                                <div class='box'>
                                    <h1>Shop</h1>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie luctus enim et ultrices. Phasellus dignissim dapibus volutpat. Vivamus commodo eros nec interdum imperdiet.
                                    </p>

                                </div>
                                <!-- Box Ends -->

                                ";
                            }
                
                        }
                ?>
                
                <!-- Bootstrap Row Begins -->
                
                    <?php 
                    
                    if(!isset($_GET['p_cat'])){
                        
                        if(!isset($_GET['cat'])){
                            
                            $p_page = 6;
                            
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                                }else{
                                    
                                    $page=1;
                                    
                                }
                                    
                                $start_from = ($page-1) * ($p_page);
                                
                                $get_products = "select * from product order by 1 DESC LIMIT $start_from,$p_page";
                                
                                $run_products = mysqli_query($con,$get_products);
                                
                                while($row_products=mysqli_fetch_array($run_products)){
                                    
                                    $pro_id = $row_products['product_id'];
        
                                    $pro_title = $row_products['product_title'];
        
                                    $pro_price = $row_products['product_price'];
        
                                    $pro_img1 = $row_products['product_img1'];
                                    
                                    echo "
                                    
                                        <div class='col-md-4 col-sm-6 center-responsive'>
                                        
                                            <div class='product'>
                                            
                                                <a href='details.php?pro_id=$pro_id'>
                                                
                                                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                                
                                                </a>
                                                
                                                <div class='text'>
                                                
                                                    <h3>
                                                    
                                                        <a href='details.php?pro_id=$pro_id'> $pro_title</a>
                                                    
                                                    </h3>
                                                    
                                                    <p class='price'>
                                                    
                                                        R$pro_price.00
                                                    
                                                    </p>
                                                    
                                                    <p class='button'>
                                                    
                                                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                                        
                                                            View Details
                                                        
                                                        </a>
                                                    
                                                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                        
                                                            <i class='fa fa-shopping-cart'></i> Add to Cart
                                                        
                                                        </a>
                                                    
                                                    </p>
                                                
                                                </div>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    ";
                                
                            }
                    ?>
                
                <!-- Bootstrap Row Ends -->
                
                <!-- Bootstrap Pagination Begin -->
                <center>
                    <!-- ul Begins -->
                    <ul class="pagination">
                        <?php 
                        
                            $query = "select * from product";
                            
                            $result = mysqli_query($con,$query);
                            
                            $total_records = mysqli_num_rows($result);
                            
                            $total_pages = ceil($total_records / $p_page);
                            
                                echo "
                                
                                    <li>
                                    
                                        <a href='shop.php?page=1'>".'First Page'."</a>
                                    
                                    </li>
                                
                                ";
                            
                                for($i=1; $i<=$total_pages; $i++){
                                    
                                    echo "
                                
                                    <li>
                                    
                                        <a href='shop.php?page=".$i."'> ".$i." </a>
                                    
                                    </li>
                                    
                                    ";
                                    
                                };
                            
                                echo "
                                
                                    <li>
                                    
                                        <a href='shop.php?page=$total_pages'>".'Last Page'."</a>
                                    
                                    </li>
                                
                                ";
                                      
                            }
                        } 
                        
                        ?>
                    </ul>
                    <!-- ul Ends -->
                </center>
                <!-- Bootstrap Pagination Ends -->
                
                <!-- Bootstrap Row Begins -->
                
                    <?php 
                        
                        getpcatpro(); 
                
                        getcatpro();
                    
                    ?>
                
                <!-- Bootstrap Row Ends -->
                
            </div>
            <!-- Bootstrap Column md-9 Ends -->
        </div>
        <!-- Bootstrap Container Ends -->
<!--</div>-->
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