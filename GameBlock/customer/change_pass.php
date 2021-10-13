<h1 align="center">Change Your Password</h1>

<!--Form Begins -->
<form action="" method="post" enctype="multipart/form-data">
    <!-- Bootstrap Form Group Begins -->
    <div class="form-group">
        <label>Your Old Password: </label>
        <input type="password" name="old_pass" class="form-control" required>
    </div>
    <!-- Bootstrap Form Group Ends -->
    
    <!-- Bootstrap Form Group Begins -->
    <div class="form-group">
        <label>Your New Password: </label>
        <input type="password" name="new_pass" class="form-control" required>
    </div>
    <!-- Bootstrap Form Group Ends -->
    
    <!-- Bootstrap Form Group Begins -->
    <div class="form-group">
        <label>Confirm New Password: </label>
        <input type="password" name="new_pass_confirm" class="form-control" required>
    </div>
    <!-- Bootstrap Form Group Ends -->
    
    <!-- Center Text -->
    <div class="text-center">
        <!-- Update Button -->
        <button type="submit" name="action" class="btn btn-primary">
            <i class="fa fa-key"></i>&nbsp;Update Password
        </button>
        <!-- Update Button/ -->
    </div>
    <!-- Center Text /-->
</form>
<!-- Form Ends -->

<?php 

if(isset($_POST['action'])){
    
    $c_email = $_SESSION['customer_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_confirm'];
    
    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($con,$sel_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass){
        
        echo "<script>alert('Sorry, Your Current Password is Invalid. Try Again')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Sorry, Your new Password did not match')</script>";
        
        exit();
        
    }
    
    $hashedPassword = password_hash($c_new_pass, PASSWORD_BCRYPT);
    
    $update_c_pass = "update customers set customer_pass='$hashedPassword' where customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Password Has been Updated')</script>";
        
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
}

?>