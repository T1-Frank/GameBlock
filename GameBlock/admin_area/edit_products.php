 <?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<?php 

    if(isset($_GET['edit_product'])){
        
        $edit_id = $_GET['edit_product'];
        
        $get_p = "select * from product where product_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['product_id'];
        
        $p_title = $row_edit['product_title'];
        
        $p_cat = $row_edit['p_cat_id'];
        
        $cat = $row_edit['cat_id'];
        
        $p_image1 = $row_edit['product_img1'];
        
        $p_image2 = $row_edit['product_img2'];
        
        $p_image3 = $row_edit['product_img3'];
        
        $p_price = $row_edit['product_price'];
        
        $p_keywords = $row_edit['product_keywords'];
        
        $p_desc = $row_edit['product_desc'];
        
    }
    
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat'";
        
        $run_p_cat = mysqli_query($con,$get_p_cat);
    
        $row_p_cat = mysqli_fetch_array($run_p_cat);
    
        $p_cat_title = $row_p_cat['p_cat_title'];
    
        $get_cat = "select * from categories where cat_id='$cat'";
        
        $run_cat = mysqli_query($con,$get_cat);
    
        $row_cat = mysqli_fetch_array($run_cat);
    
        $cat_title = $row_cat['cat_title'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
</head>

<body>
    
    <!-- Bootstrap Row Begins -->
    <div class="row">
        <!-- Bootstrap Column lg-12 Begins -->
        <div class="col-lg-12">
            <!-- Bootstrap Breadcrumb Begins -->
            <ol class="breadcrumb">
                <!-- Bootstrap li Begins -->
                <li class="active">
                    
                    <i class="fa fa-dashboard"></i> DashBoard / Edit Product
                    
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
                <!-- Bootstrap Panel Heading Begins -->
                <div class="panel-heading">
                    <!-- Bootstrap Panel Title Begins -->
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Edit Product
                    </h3>
                    <!-- Bootstrap Panel Title Ends -->
                </div>
                <!-- Bootstrap Panel Heading Ends -->
                
                <!-- Bootstrap Panel Body Begins -->
                <div class="panel-body">
                    <!-- Form Begins -->
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Title</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="product_title" value="<?php echo $p_title; ?>" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Category</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <!-- Select Begins -->
                                <select name="product_cat" class="form-control">
                                    <option value="<?php echo $p_cat; ?>"><?php echo $p_cat_title; ?>
                                    
                                        <?php 
                                        
                                            $get_p_cats = "select * from product_categories";
                                            $run_p_cats = mysqli_query($con,$get_p_cats);
                                        
                                            while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                                
                                                $p_cat_id = $row_p_cats['p_cat_id'];
                                                $p_cat_title = $row_p_cats['p_cat_title'];
                                                
                                                echo "
                                                
                                                    <option value='$p_cat_id'>$p_cat_title</option>
                                                
                                                ";
                                                
                                            }
                                        
                                        ?>
                                        
                                    </option>
                                </select>
                                <!-- Select Ends -->
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Category</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <!-- Select Begins -->
                                <select name="cat" class="form-control">
                                    <option value="<?php echo $cat; ?>"><?php echo $cat_title; ?>
                                    
                                        <?php 
                                        
                                            $get_cat = "select * from categories";
                                            $run_cat = mysqli_query($con,$get_cat);
                                        
                                            while($row_cat=mysqli_fetch_array($run_cat)){
                                                
                                                $cat_id = $row_cat['cat_id'];
                                                $cat_title = $row_cat['cat_title'];
                                                
                                                echo "
                                                
                                                    <option value='$cat_id'>$cat_title</option>
                                                
                                                ";
                                                
                                            }
                                        
                                        ?>
                                        
                                    </option>
                                </select>
                                <!-- Select Ends -->
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Image 1</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="product_img1" type="file" class="form-control">
                                <br>
                                <img width="70" height="70" src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>">
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Image 2</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="product_img2" type="file" class="form-control">
                                <br>
                                <img width="70" height="70" src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>">
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Image 3</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="product_img3" type="file" class="form-control" >
                                <br>
                                <img width="70" height="70" src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>">
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Price</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input value="<?php echo $p_price; ?>" name="product_price" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Keywords</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input value="<?php echo $p_keywords; ?>" name="product_keywords" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Product Description</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <textarea name="product_desc" cols="19" rows="6" class="form-control">
                                    <?php echo $p_desc; ?>
                                </textarea>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label"></label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input type="submit" name="update" value="Update Product" class="btn btn-primary form-control">
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                    </form>
                    <!-- Form Ends -->
                </div>
                <!-- Bootstrap Panel Body Ends -->
            </div>
            <!-- Bootstrap Panel Ends -->
        </div>
        <!-- Bootstrap Column lg-12 Ends -->
    </div>
    <!-- Bootstrap Row Ends -->
    
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    
</body>
</html>

<?php 

if(isset($_POST['update'])){
        
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
        
        
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
        
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
        
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $update_product = "update product set p_cat_id='$product_cat', cat_id='$cat',date=NOW(),product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_price='$product_price',product_keywords='$product_keywords',product_desc='$product_desc' where product_id='$p_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
        echo "<script>alert('Product Updated Successfully')</script>";
        
        echo "<script>window.open('index.php?view_product','_self')</script>";
    
    }
        
}

?>

<?php } ?>