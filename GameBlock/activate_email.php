<?php

include("includes/db.php");

function redirect(){
    
    header('Location: customer_register_check.php');
    exit();
}

if(!isset($_GET['c_email']) || !isset($_GET['token']) ){
    
    redirect();
    
}else{
    
    $c_email = $_GET['c_email'];
    $token = $_GET['token'];
    
    $select_user = "select * from customers where c_email='$c_email' AND token='$token' AND isEmailConfirmed=0";
    
    $run_select_user = mysqli_query($con,$select_user);
    
    $check_select_user = mysqli_num_rows($run_select_user);
    
    if($check_select_user>0){
        
        $update_user = "update customers set isEmailConfirmed=1,token='' where c_email='$c_email'";
        
        $run_update_user = mysqli_query($con,$update_user);
        
        echo "<script>alert('Email Has been verifed! Please Login')</script>";
        
        echo "<script>window.open('customer/customer.login.php','_self')</script>";
        
    }else{
        
        redirect();
        
    }
    
}

?>