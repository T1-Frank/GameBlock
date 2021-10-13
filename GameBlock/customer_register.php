<?php 

    $active='Account';
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
                        Register
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
                <!-- Box Begins -->
                <div class="box">
                    <!-- Box Header Begin -->
                    <div class="box-header">
                        <!-- Center -->
                        <center>
                            <h2>Register Here</h2>
                        </center>
                        <!-- Center /-->
                        
                        <!-- Form Begin -->
                        <form action="customer_register.php" method="post" enctype="multipart/form-data">
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Password</label>
                                <input type="password" class="form-control" name="c_pass" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="c_cpass" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Country</label>
                                <input type="text" class="form-control" name="c_country" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Phone Number</label>
                                <input type="text" class="form-control" name="c_contact" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Address</label>
                                <input type="text" class="form-control" name="c_address" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Profile Picture Size:200x200</label>
                                <input type="file" class="form-control form-height-custom" name="c_image" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>&nbsp;&nbsp;Register
                                </button>
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                        </form>
                        <!-- Form Ends -->
                    </div>
                    <!-- Box Header Ends -->
                </div>
                <!-- Box Begins -->
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

<?php 

    if(isset($_POST['register'])){
        
        $c_name = $_POST['c_name'];
        
        $c_email = $_POST['c_email'];
        
        $c_pass = $_POST['c_pass'];
        
        $c_cpass = $_POST['c_cpass'];
        
        $c_country = $_POST['c_country'];
        
        $c_city = $_POST['c_city'];
        
        $c_contact = $_POST['c_contact'];
        
        $c_add = $_POST['c_address'];
        
        $c_image = $_FILES['c_image']['name'];
        
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        
        $c_ip = getRealIpUser();
        
        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
        
        $hashedPassword = password_hash($c_pass, PASSWORD_BCRYPT);
        
        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$hashedPassword','$c_country','$c_city','$c_contact','$c_add','$c_image','$c_ip')";
        
        $run_customer = mysqli_query($con,$insert_customer);
        
        $sel_cart = "select * from cart where ip_add='$c_ip'";
        
        $run_cart = mysqli_query($con,$sel_cart);
        
        $check_cart = mysqli_num_rows($run_cart);
        
        if($check_cart>0){
            
            $_SESSION['customer_email']=$c_email;
            
            echo "<script>alert('Registration Successfull')</script>";
            
            echo "<script>window.open('checkout.php','_self')</script>";
            
        }else{
            
            $_SESSION['customer_email']=$c_email;
            
            echo "<script>alert('Registration Successfull')</script>";
            
            echo "<script>window.open('index.php','_self')</script>";
            
        }
        
    }

?>