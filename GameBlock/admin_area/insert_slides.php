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
                    
                    <i class="fa fa-dashboard"></i> DashBoard / Insert Slides
                    
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
                        
                        <i class="fa fa-money fa-fw"></i> Insert Slides
                        
                    </h3>
                    <!-- panel-title Ends -->
                </div>
                <!-- Bootstrap panel-heading Ends -->
                
                <!-- Bootstrap panel-body Begins -->
                <div class="panel-body">
                    <!-- form Begins -->
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <!-- form-group Begins -->
                        <div class="form-group">
                            <!-- label Begins -->
                            <label for="" class="control-label col-md-3">
                                Slide Name
                            </label>
                            <!-- label Ends -->
                            
                            <!-- Bootstrap Col md-6 Begins -->
                            <div class="col-md-6">
                                <input name="slide_name" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Col md-6 Ends -->
                            
                        </div>
                        <!-- form-group Ends -->
                        
                        <!-- form-group Begins -->
                        <div class="form-group">
                            <!-- label Begins -->
                            <label for="" class="control-label col-md-3">
                                Select Image
                            </label>
                            <!-- label Ends -->
                            
                            <!-- Bootstrap Col md-6 Begins -->
                            <div class="col-md-6">
                                <input type="file" name="slide_image" class="form-control" required>
                            </div>
                            <!-- Bootstrap Col md-6 Ends -->
                            
                        </div>
                        <!-- form-group Ends -->
                        
                        <!-- form-group Begins -->
                        <div class="form-group">
                            <!-- label Begins -->
                            <label class="control-label col-md-3">
                                
                            </label>
                            <!-- label Ends -->
                            
                            <!-- Bootstrap Col md-6 Begins -->
                            <div class="col-md-6">
                                <input value="Add Slide" name="action" type="submit" class="form-control btn btn-primary">
                            </div>
                            <!-- Bootstrap Col md-6 Ends -->
                            
                        </div>
                        <!-- form-group Ends -->
                    </form>
                    <!-- form Ends -->
                </div>
                <!-- Bootstrap panel-body Ends -->
            </div>
            <!-- Bootstrap Panel Ends -->
        </div>
        <!-- Bootstrap Column lg-12 Ends -->
    </div>
    <!-- Bootstrap Row Ends -->

<?php

    if(isset($_POST['action'])){
        
        $slide_name = $_POST['slide_name'];
        
        $slide_image = $_FILES['slide_image']['name'];
        
        $temp_name = $_FILES['slide_image']['tmp_name'];
        
        $view_slides = "select * from slider";
            
        $view_run_slide = mysqli_query($con,$view_slides);
        
        $count = mysqli_num_rows($view_run_slide);
        
        if($count<4){
            
            
            move_uploaded_file($temp_name,"slides_images/$slide_image");
            
            $insert_slide = "insert into slider (slide_name,slide_image) values ('$slide_name','$slide_image')";
            
            $run_slide = mysqli_query($con,$insert_slide);
            
            echo "<script>alert('Slide Added, WoW')</script>";
            
            echo "<script>window.open('index.php?view_slides','_self')</script>";
            
        }else{
            
            echo "<script>alert('You Have Already Inserted 4 Slides')</script>";
            
        }
        
    }
    
?>



<?php } ?>