<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

    <!-- Bootstrap Row Begins -->
    <div class="row">
        <!-- Bootstrap Column lg-12 Begins -->
        <div class="col-lg-12">
            <!-- Bootstrap Breadcrumb Begins -->
            <ol class="breadcrumb">
                <!-- Bootstrap li Begins -->
                <li class="active">
                    
                    <i class="fa fa-dashboard"></i> DashBoard / View Slides
                    
                </li>
                <!-- Bootstrap li Ends -->
            </ol>
            <!-- Bootstrap Breadcrumb Ends -->
        </div>
        <!-- Bootstrap Column lg-12 Ends -->
    </div>
    <!-- Bootstrap Row Ends -->

    <!-- Bootstrap Row Begins -->
    <div class="row">
        <!-- Bootstrap Column lg-12 Begins -->
        <div class="col-lg-12">
            <!-- Bootstrap Panel Begins -->
            <div class="panel panel-default">
                <!-- Bootstrap panel-heading Begins -->
                <div class="panel-heading">
                    <!-- panel-title Begins -->
                    <h3 class="panel-title">
                        
                        <i class="fa fa-tv fa-fw"></i> View Slides
                        
                    </h3>
                    <!-- panel-title Ends -->
                </div>
                <!-- Bootstrap panel-heading Ends -->
                
                <!-- Bootstrap panel-body Begins -->
                <div class="panel-body">
                    
                    <?php 
                    
                    $get_slides = "select * from slider";
        
                    $run_slides = mysqli_query($con,$get_slides);
    
                    while($row_slides = mysqli_fetch_array($run_slides)){
                        
                        $slide_id = $row_slides['slide_id'];
                        
                        $slide_name = $row_slides['slide_name'];
                        
                        $slide_image = $row_slides['slide_image'];
                    
                    ?>
                    
                    <!-- Bootstrap Column lg-3 Begins -->
                    <div class="col-lg-3 col-md-3">
                        <!-- Bootstrap Panel Begins -->
                        <div class="panel panel-primary">
                            <!-- Bootstrap Panel-Heading Begins -->
                            <div class="panel-heading">
                                <h3 class="panel-title" align="center"><?php echo $slide_name; ?></h3>
                            </div>
                            <!-- Bootstrap Panel-Heading Ends -->
                            
                            <!-- Bootstrap Panel-Body Begins -->
                            <div class="panel-body">
                                <img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>" class="img-responsive">
                            </div>
                            <!-- Bootstrap Panel-Body Ends -->
                            
                            <!-- Bootstrap Panel-Footer Begins -->
                            <div class="panel-footer">
                                <center>
                                    <a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-right">
                                        <i class="fa fa-trash-o">
                                            Delete Slide
                                        </i>
                                    </a>
                                    
                                    <a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-left">
                                        <i class="fa fa-pencil">
                                            Edit Slide
                                        </i>
                                    </a>
                                    
                                    <div class="clearfix"></div>
                                    
                                </center>
                            </div>
                            <!-- Bootstrap Panel-Footer Ends -->
                            
                        </div>
                        <!-- Bootstrap Panel Ends -->
                    </div>
                    <!-- Bootstrap Column lg-3 Ends -->
                    
                    <?php } ?>
                    
                </div>
                <!-- Bootstrap panel-body Ends -->
            </div>
            <!-- Bootstrap Panel Ends -->
        </div>
        <!-- Bootstrap Column lg-12 Ends -->
    </div>
    <!-- Bootstrap Row Ends -->


<?php } ?>