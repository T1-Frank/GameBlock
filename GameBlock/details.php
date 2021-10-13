<?php 
    
    $active='Cart';
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
                    
                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"> <?php echo $p_cat_title; ?> </a>
                    </li>
                    
                    <li> <?php echo $pro_title; ?> </li>
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
                <!-- Bootstrap Row & ProductMain Begins -->
                <div id="productMain" class="row">
                    <!-- Bootstrap Column sm-6 Begins -->
                    <div class="col-sm-6">
                        <!-- Main Image Begin -->
                        <div id="mainImage">
                            <!-- Bootstrap Carousel Begins -->
                            <div id="myCarousel" class="carousel slide">
                                <!-- Bootstrap Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <!-- li Begin -->
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <!-- li Ends -->
                                </ol>
                                <!-- Bootstrap Carousel Indicator /-->
                                
                                <!-- Carousel Inner Begin -->
                                <div class="carousel-inner">
                                    <!-- Carousel Item Begins -->
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product Slide 1"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product Slide 2"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product Slide 3"></center>
                                    </div>
                                    <!-- Carousel Item Ends -->
                                </div>
                                <!-- Carousel Inner Ends -->
                                
                                <!-- Carousel Arrow Controls -->
                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!-- Carousel Arrow Controls -->
                            </div>
                            <!-- Botstrap Carousel Ends -->
                        </div>
                        <!-- Main Image Ends -->
                    </div>
                    <!-- Bootstrap Column sm-6 Ends -->
                    
                    <!-- Bootstrap Column sm-6 Begins -->
                    <div class="col-sm-6">
                        <!-- Box Begin -->
                        <div class="box">
                            <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                            
                            <?php add_cart(); ?>
                            
                            <!-- Bootstrap Form Begins -->
                            <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                                <!-- Bootstrap Form Group Begin -->
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                                    
                                    <!-- Bootstrap Column md-7 Begin -->
                                    <div class="col-md-7">
                                        <!-- Select Begin -->
                                        <select name="product_qty" id="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <!-- Select Ends -->
                                    </div>
                                    <!-- Bootstrap Column md-7 Ends -->
                                </div>
                                <!-- Bootstrap Form Group Ends -->
                                
                                <!-- Bootstrap Form Group Begin -->
                                
                                <!-- Bootstrap Form Group Ends -->
                                
                                <p class="price">R<?php echo $pro_price; ?>.00</p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">&nbsp;&nbsp;Add to Cart</button></p>
                            </form>
                            <!-- Bootstrap Form Ends -->
                        </div>
                        <!-- Box Ends -->
                        
                        <!-- Bootstrap Row/Thumbs Begins -->
                        <div class="row" id="thumbs">
                            <!-- Bootstrap Column xs-4 Begins -->
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product11" class="img-responsive">
                                </a>
                            </div>
                            <!-- Bootstrap Column xs-4 Ends -->
                            
                            <!-- Bootstrap Column xs-4 Begins -->
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product10" class="img-responsive">
                                </a>
                            </div>
                            <!-- Bootstrap Column xs-4 Ends -->
                            
                            <!-- Bootstrap Column xs-4 Begins -->
                            <div class="col-xs-4">
                                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product7" class="img-responsive">
                                </a>
                            </div>
                            <!-- Bootstrap Column xs-4 Ends -->
                        </div>
                        <!-- Bootstrap Row/Thumbs Ends -->
                    </div>
                    <!-- Bootstrap Column sm-6 Ends -->
                </div>
                <!-- Bootstrap Row & ProductMain Ends -->
                
                <!-- Box Begin -->
                <div class="box" id="details">
                    
                    <h4>Product Details</h4>
                    
                    <p>
                       
                        <?php echo $pro_desc; ?>
                        
                    </p>
                    
                   
                    
                    <hr>
                    
                </div>
                <!-- Box Ends -->
                
                <!-- Same Height Row Begins -->
                <div id="row same-height-row">
                    <!-- Bootstrap Column md-3/sm-6 Begins -->
                    <h3 class="text-center b_mar">Products You May Like</h3>
                    
                    <?php 
                    
                        $get_products = "select * from product order by rand() LIMIT 0,3";
                    
                        $run_products = mysqli_query($con,$get_products);
                    
                        while($row_products = mysqli_fetch_array($run_products)){
                            
                            $pro_id = $row_products['product_id'];
                            
                            $pro_title = $row_products['product_title'];
                            
                            $pro_img1 = $row_products['product_img1'];
                            
                            $pro_price = $row_products['product_price'];
                            
                            echo "
                            
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                
                                    <div class='product same-height'>
                                    
                                        <a href='details.php?pro_id=$pro_id'>
                                        
                                            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                        
                                        </a>
                                        
                                        <div class='text'>
                                        
                                            <h3> <a href='details.php?pro_id=$pro_id'>$pro_title</a> </h3>
                                            
                                            <p class='price'> R$pro_price.00 </p>
                                        
                                        </div>
                                    
                                    </div>
                                
                                </div>
                            
                            ";
                            
                        }
                    
                    ?>
                    
                </div>
                <!-- Same Height Row Ends -->
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