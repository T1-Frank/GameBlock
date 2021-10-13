<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<?php 

if(isset($_GET['edit_slide'])){
    
    $edit_slide_id = $_GET['edit_slide'];
    
    $edit_slide = "select * from slider where slide_id='$edit_slide_id'";
    
    $run_edit_slide = mysqli_query($con,$edit_slide);
    
    $row_edit_slide = mysqli_fetch_array($run_edit_slide);
    
    $slide_id = $row_edit_slide['slide_id'];
    
    $slide_name = $row_edit_slide['slide_name'];
    
    $slide_image = $row_edit_slide['slide_image'];
    
}

?>


    <!-- Bootstrap Row Begins -->
    <div class="row">
        <!-- Bootstrap Column lg-12 Begins -->
        <div class="col-lg-12">
            <!-- Bootstrap Breadcrumb Begins -->
            <ol class="breadcrumb">
                <!-- Bootstrap li Begins -->
                <li class="active">
                    
                    <i class="fa fa-dashboard"></i> DashBoard / Edit Slides
                    
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
                        
                        <i class="fa fa-money fa-fw"></i> Edit Slides
                        
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
                                <input value="<?php echo $slide_name; ?>" name="slide_name" type="text" class="form-control" required>
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
                                <br>
                                <img class="img-responsive" src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>">
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
                                <input value="Update Slide" name="update" type="submit" class="form-control btn btn-primary">
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

    if(isset($_POST['update'])){
        
        $slide_name = $_POST['slide_name'];
        
        $slide_image = $_FILES['slide_image']['name'];
        
        $temp_name = $_FILES['slide_image']['tmp_name'];
        
        move_uploaded_file($temp_name,"slides_images/$slide_image");
        
        $update_slide = "update slider set slide_name='$slide_name',slide_image='$slide_image' where slide_id='$slide_id'";
        
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){
            
            echo "<script>alert('Slide Updated Successfully')</script>";
        
            echo "<script>window.open('index.php?view_slides','_self')</script>";
            
        }
        
    }
    
?>



<?php } ?>