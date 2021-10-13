<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
    <title>Insert User</title>
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
                    
                    <i class="fa fa-dashboard"></i> DashBoard / Insert Users
                    
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
                        <i class="fa fa-users fa-fw"></i> Insert Users
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
                            
                            <label class="col-md-3 control-label">User Name</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_name" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Email</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_email" type="email" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Password</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_pass" type="password" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Country</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_country" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Contact</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_contact" type="tel" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Job</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_job" type="text" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">User Image</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input name="admin_image" type="file" class="form-control" required>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">About</label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <textarea name="admin_about" cols="19" rows="6" class="form-control"></textarea>
                            </div>
                            <!-- Bootstrap Column md-6 Ends -->
                            
                        </div>
                        <!-- Form Group Ends -->
                        
                        <!-- Form Group Begins -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label"></label>
                            
                            <!-- Bootstrap Column md-6 Begins -->
                            <div class="col-md-6">
                                <input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">
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

if(isset($_POST['submit'])){
        
    $user_name = $_POST['admin_name'];
    $user_email = $_POST['admin_email'];
    $user_pass = $_POST['admin_pass'];
    $user_country = $_POST['admin_country'];
    $user_contact = $_POST['admin_contact'];
    $user_job = $_POST['admin_job'];
        
        
    $user_image = $_FILES['admin_image']['name'];
    $temp_admin_image = $_FILES['admin_image']['tmp_name'];
    
    $user_about = $_POST['admin_about'];
        
    move_uploaded_file($temp_admin_image,"admin_images/$user_image");
    
    $insert_user = "insert into admins (admin_name,admin_email,admin_pass,admin_country,admin_contact,admin_job,admin_image,admin_about) values ('$user_name','$user_email','$user_pass','$user_country','$user_contact','$user_job','$user_image','$user_about')";
    
    $run_user = mysqli_query($con,$insert_user);
        
    if($run_user){
            
        echo "<script>alert('Admin User has been Inserted Sucessfully')</script>";
        
        echo "<script>window.open('index.php?view_users','_self')</script>";
            
    }
        
}

?>

<?php } ?>