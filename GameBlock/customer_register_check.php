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
                        <form action="customer_register_check.php" method="post" enctype="multipart/form-data">
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Your Email</label>
                                <input type="text" class="form-control" name="c_email" required>
                                
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
                                
                                <label>Your Contact</label>
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
                                
                                <label>Profile Picture</label>
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

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST['register'])){
        
        $c_name = mysqli_real_escape_string($_POST['c_name']);
        
        $c_email = mysqli_real_escape_string($_POST['c_email']);
        
        $c_pass = mysqli_real_escape_string($_POST['c_pass']);
        
        $c_cpass = mysqli_real_escape_string($_POST['c_pass']);
        
        $c_country = mysqli_real_escape_string($_POST['c_country']);
        
        $c_city = mysqli_real_escape_string($_POST['c_city']);
        
        $c_contact = mysqli_real_escape_string($_POST['c_contact']);
        
        $c_add = mysqli_real_escape_string($_POST['c_address']);
        
        $c_image = $_FILES['c_image']['name'];
        
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        
        $c_ip = getRealIpUser();
        
        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
        
        if($c_cpass!=$c_pass){
            
            echo "<script>alert('Passwords did not matched')</script>";
            
            echo "<script>window.open('customer_register_check.php','_self')</script>";
            
        }
        else{
            
            $_SESSION['customer_email']=$c_email;
            
            echo "<script>alert('Registration Successfull Please Verfy Email Address')</script>";
            
            echo "<script>window.open('index.php','_self')</script>";
                        
        }/*else{
            
            $check_email = "select * from customers where c_email='$c_email'";
            
            $run_check_email = mysqli_query($con,$check_email);
            
            $c_check = mysqli_num_rows($run_check_email);
            
            if($c_check>0){
                
                echo "<script>alert('Email Already Exists')</script>";
                
                echo "<script>window.open('customer_register_check.php','_self')</script>";
                
            }else{
                
                $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789@!?/=+#$%&';
                $token = str_shuffle($token);
                $token = substr($token, 0, 36);
                
                $hashedPassword = password_hash($c_pass, PASSWORD_BCRYPT);
        
                $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,isEmailConfirmed,token,customer_ip) values ('$c_name','$c_email','$hashedPassword','$c_country','$c_city','$c_contact','$c_add','$c_image','0','$token',$c_ip')";
        
                $run_customer = mysqli_query($con,$insert_customer);
                
                $mail = new PHPMailer();
                
                $mail-> setFrom('webkart@onlineshopping.com', 'Shinichi');
                
                $mail-> addAddress('$c_email', '$c_name');
                
                $mail-> isHTML(true);
                
                $mail-> Subject = 'Please Verify Email';
                
                $mail-> Body    = "
                                    
                                    Please Verify Your Email Address at Below Link. Click Link to Activate Your Account<br/><br/>
                                    
                                    <a href='http://localhost/myproject/activate_email.php?c_email=$c_mail&token=$token'>Activate Your Email</a>
                                    
                                ";
                
                if($mail -> send()){
        
                    $sel_cart = "select * from cart where ip_add='$c_ip'";
        
                    $run_cart = mysqli_query($con,$sel_cart);
        
                    $check_cart = mysqli_num_rows($run_cart);
                
                    if($check_cart>0){
                    
                        $_SESSION['customer_email']=$c_email;
            
                        echo "<script>alert('Registration Successfull, Please Verfy Email Address')</script>";
            
                        echo "<script>window.open('checkout.php','_self')</script>";
                    
                    }/*elseif(
            
                        $_SESSION['customer_email']=$c_email;
            
                        echo "<script>alert('Registration Successfull, Please Verfy Email Address')</script>";
            
                        echo "<script>window.open('index.php','_self')</script>";
                        
                    )else{
            
                        echo "<script>alert('Something Went Wrong, Try again')</script>";
            
                        echo "<script>window.open('customer_register_check.php','_self')</script>";
                    
                    }
                    
                }
                
            }
            
            
        }*/
        
    }

?>