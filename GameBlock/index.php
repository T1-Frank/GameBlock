<?php 

    $active='Home';
    include("includes/header.php");

?>
    
    <!-- Site Slider Begin -->
    <div class="container" id="slider">
        <!-- Bootstrap Column md-12 Begin -->
        <div class="col-md-12">
            <!-- Bootstrap Carousel Begin -->
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <!-- Carousel Indicators Begin -->
                <ol class="carousel-indicators">
                    <!-- Indicator Data -->
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>        
                    <!-- Indicator Data /-->
                </ol>
                <!-- Carousel Indicators Ends -->
                
                <!-- Carousel-Inner Begins -->
                <div class="carousel-inner">
                    <!-- Carousel Item(Images/Videos) -->
                    <?php 
                    
                    $get_slider = "select * from slider LIMIT 0,1";
                    
                    $run_slides = mysqli_query($con,$get_slider);
                    
                    while($row_slides = mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        
                        echo "
                        
                            <div class='item active'>
                            
                                <img src='admin_area/slides_images/$slide_image'>
                                
                            </div>
                        
                        ";
                        
                    } 
                    
                    $get_slider = "select * from slider LIMIT 1,3";
                    
                    $run_slides = mysqli_query($con,$get_slider);
                    
                    while($row_slides = mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        
                        echo "
                        
                            <div class='item'>
                            
                                <img src='admin_area/slides_images/$slide_image'>
                                
                            </div>
                        
                        ";
                        
                    }
                    
                    ?>
                    <!-- Carousel Item(Images/Videos) /-->
                </div>
                <!-- Carousel-Inner Ends -->
                
                <!-- Carousel Arrow Controls -->
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- Carousel Arrow Controls /-->
            </div>
            <!-- Bootstrap Carousel Ends -->
        </div>
        <!-- Bootstrap Column md-12 Ends -->
    </div>
    <!-- Site Slider Ends -->
    
    <!-- Advantages Begins -->
    <div id="advantages">
        <!-- Advantages Container Begins -->
        <div class="container">
            <!-- Same Height Row Begins -->
            <div class="same-height-row">
                <!-- Bootstrap Column sm-4 Begins -->
                <div class="col-sm-4">
                    <!-- Box Begins -->
                    <div class="box same-height">
                        <!-- Icon Begin -->
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <!-- Icon Ends -->
                        
                        <!-- Box Data -->
                        <h3><a href="#">Our Customers</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae placerat odio. Nullam in eros lacus. Maecenas purus justo, mollis at consequat sit amet, semper at ante.</p>
                        <!-- Box Data /-->
                        
                    </div>
                    <!-- Box Ends -->
                </div>
                <!-- Bootstrap Column sm-4 Ends -->
                
                <!-- Bootstrap Column sm-4 Begins -->
                <div class="col-sm-4">
                    <!-- Box Begins -->
                    <div class="box same-height">
                        <!-- Icon Begin -->
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <!-- Icon Ends -->
                        
                        <!-- Box Data -->
                        <h3><a href="#">Best Prices</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae placerat odio. Nullam in eros lacus. Maecenas purus justo, mollis at consequat sit amet, semper at ante.</p>
                        <!-- Box Data /-->
                        
                    </div>
                    <!-- Box Ends -->
                </div>
                <!-- Bootstrap Column sm-4 Ends -->
                
                <!-- Bootstrap Column sm-4 Begins -->
                <div class="col-sm-4">
                    <!-- Box Begins -->
                    <div class="box same-height">
                        <!-- Icon Begin -->
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <!-- Icon Ends -->
                        
                        <!-- Box Data -->
                        <h3><a href="#">100% Satisfaction</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae placerat odio. Nullam in eros lacus. Maecenas purus justo, mollis at consequat sit amet, semper at ante.</p>
                        <!-- Box Data /-->
                        
                    </div>
                    <!-- Box Ends -->
                </div>
                <!-- Bootstrap Column sm-4 Ends -->
            </div>
            <!-- Same Height Row Ends -->
        </div>
        <!-- Advantages Container Ends -->
    </div>
    <!-- Advantages Ends -->
    
    <!-- Hot Begins -->
    <div id="hot">
        <!-- Box Begins -->
        <div class="box">
            <!-- Bootstrap Container Begins -->
            <div class="container">
                <!-- Bootstrap Column md-12 Begins -->
                <div class="col-md-12">
                    <!-- Header Begin -->
                    <h2>
                        Our Latest Products
                    </h2>
                    <!-- Header Ends -->
                </div>
                <!-- Bootstrap Column md-12 Ends -->
            </div>
            <!-- Bootstrap Container Ends -->
        </div>
        <!-- Box Ends -->
    </div>
    <!-- Hot Ends -->
    
    <!-- Content Begins -->
    <div id="content" class="container">
        <!-- Bootstrap Row Begins -->
        <div class="row">
            
            <?php
            
            getPro();
            
            ?>
            
        </div>
        <!-- Bootstrap Row Ends -->
    </div>
    <!-- Content Ends -->
    
    <!--
    <div class="memo">
        <div class="container">
            <div class="row">
                <div class="col-md-3 memo-gd text-center">
                    <h3>Buy your products in simple way</h3>
                </div>
                <div class="col-md-3 memo-gd text-center">
                    <span class="alt" aria-hidden="true"><i class="fa fa-user"></i></span>
                    <h4>Login to your Account</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 memo-gd text-center">
                    <span class="alt" aria-hidden="true"><i class="fa fa-check"></i></span>
                    <h4>Select your Product</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="col-md-3 memo-gd text-center">
                    <span class="alt" aria-hidden="true"><i class="fa fa-credit-card"></i></span>
                    <h4>Make Your Payment</h4>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    
    
    <div id="partner">
        
        <div class="container">
            <div class="row">
                <h2>Our Partners</h2>
                <center>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="images/brands/amazon.svg">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="images/brands/adidas-9.svg">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="images/brands/flipkart.svg">
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="images/brands/redbull.svg">
                    </div>
                </center>
            </div>
        </div>
        
    </div> -->
    
    
    <!-- Footer Begins -->
    <?php 
        
        include("includes/footer.php");
    
    ?>
    <!-- Footer Ends -->
    
    <script src="js/jquery-331.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/bootstrap-337.min.js?v=<?php echo time(); ?>"></script>
    
</body>
</html>
