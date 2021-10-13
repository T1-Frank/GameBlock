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
                    
                    <i class="fa fa-dashboard"></i> DashBoard / Insert Products Categories
                    
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
                        
                        <i class="fa fa-money fa-fw"></i> Insert Products Categories
                        
                    </h3>
                    <!-- panel-title Ends -->
                </div>
                <!-- Bootstrap panel-heading Ends -->
                
                <!-- Bootstrap panel-body Begins -->
                <div class="panel-body">
                    <!-- form Begins -->
                    <form action="" class="form-horizontal" method="post">
                        <!-- form-group Begins -->
                        <div class="form-group">
                            <!-- label Begins -->
                            <label for="" class="control-label col-md-3">
                                Product Category Title
                            </label>
                            <!-- label Ends -->
                            
                            <!-- Bootstrap Col md-6 Begins -->
                            <div class="col-md-6">
                                <input name="p_cat_title" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Col md-6 Ends -->
                            
                        </div>
                        <!-- form-group Ends -->
                        
                        <!-- form-group Begins -->
                        <div class="form-group">
                            <!-- label Begins -->
                            <label for="" class="control-label col-md-3">
                                Product Category Description
                            </label>
                            <!-- label Ends -->
                            
                            <!-- Bootstrap Col md-6 Begins -->
                            <div class="col-md-6">
                                <textarea name="p_cat_desc" cols="30" rows="10" class="form-control" required></textarea>
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
                                <input value="Add Product Category" name="action" type="submit" class="form-control btn btn-primary">
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
          
          $p_cat_title = $_POST['p_cat_title'];
          
          $p_cat_desc = $_POST['p_cat_desc'];
          
          $insert_p_cat = "insert into product_categories (p_cat_title, p_cat_desc) values ('$p_cat_title', '$p_cat_desc')";
          
          $run_p_cat = mysqli_query($con,$insert_p_cat);
          
          if($run_p_cat){
              
              echo "<script>alert('Your New product Category Has Been Inserted')</script>";
              
              echo "<script>window.open('index.php?view_p_cats','_self')</script>";
              
          }
          
      }

?>



<?php } ?>