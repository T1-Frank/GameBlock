<!-- Center Begins -->
<center>
    <h1>Do You Really Want To Delete Your Account ?</h1>
    
    <!-- Form Begins -->
    <form action="" method="post">
        <input type="submit" name="Yes" value="Yes, I Want To" class="btn btn-danger">
        <input type="submit" name="No" value="No, I Don't Want To" class="btn btn-primary">
    </form>
    <!-- Form Ends -->
</center>
<!-- Center Ends -->

<?php 

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "delete from customers where customer_email='$c_email'";
    
    $run_delete_customer = mysqli_query($con,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Sucessfully Deleted!! Good Bye')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account?my_orders.php','_self')</script>";
    
}

?>