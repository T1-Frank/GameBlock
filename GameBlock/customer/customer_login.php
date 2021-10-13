<!-- Box Begins -->
<div class="box">
    <!-- Box Header Begins -->
    <div class="box-header">
        <!-- Center Begins -->
        <center>
        
            <h1>Login</h1>
            
            <p class="lead">Already Have Account..?</p>
            
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a hendrerit mauris. Duis at eros vitae orci auctor bibendum non viverra erat. Ut dolor massa, vulputate id nisi sit amet</p>
        
        </center>
        <!-- Center Ends -->
    </div><br/><br/>
    <!-- Box Header Ends -->
    
    <!-- Form Begins-->
    <form method="post" action="checkout.php">
        <!-- Form Group Begins-->
        <div class="form-group">
            
            <label>Email</label>          
            <input name="c_email" type="email" class="form-control" required>
            
        </div>
        <!-- Form Group Ends -->
        
        <!-- Form Group Begins-->
        <div class="form-group">
            
            <label>Password</label>          
            <input name="c_pass" type="password" class="form-control" required>
            
        </div>
        <!-- Form Group Ends -->
        
        <!-- Text Center Begins -->
        <div class="text-center">
        
            <button name="login" value="Login" class="btn btn-primary">
            
                <i class="fa fa-sign-in"></i>&nbsp;Login
                
            </button>
        
        </div>
        <!-- Text Center Ends -->
    </form>
    <!-- Form Ens -->
    
    <!-- Center Begins -->
    <center>
        <a href="customer_register.php">
        
            <h3>Dont have a account...? Register Now</h3>
            
        </a>
    </center>
    <!-- Center Ends -->
</div>
<!-- Box Ends -->

<?php 

    if(isset($_POST['login'])){
        
        $customer_email = $_POST['c_email'];
        
        $customer_pass = $_POST['c_pass'];
        
        $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
        
        $run_customer = mysqli_query($con,$select_customer);
        
        $get_ip = getRealIpUser();
        
        $check_customer = mysqli_num_rows($run_customer);
        
        $select_cart = "select * from cart where ip_add='$get_ip'";
        
        $run_cart = mysqli_query($con,$select_cart);
        
        $check_cart = mysqli_num_rows($run_cart);
        
        if(password_verify($customer_pass, $data['c_pass'])){
            
            echo "<script>alert('Your Email or Password is Incorrect')</script>";
            
            exit();
            
        }
        
        if(password_verify($customer_pass, $data['c_pass']) AND $check_cart==0){
            
            $_SESSION['customer_email']=$customer_email;
            
            echo "<script>alert('You are Logged in')</script>";
            
            echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
            
        }else{
            
            $_SESSION['customer_email']=$customer_email;
            
            echo "<script>alert('You are Logged in')</script>";
            
            echo "<script>window.open('checkout.php','_self')</script>";
            
        }
    }

?>
