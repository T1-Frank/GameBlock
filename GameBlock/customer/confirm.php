<?php 

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{
    

include("includes/db.php");
include("functions/functions.php");

if(isset($_GET['order_id'])){
        
    $order_id = $_GET['order_id'];
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameBlock</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/style.css?v=<?php echo time(); ?>">
    
</head>

<body>
    
    <!-- User Name Begins -->
    <div id="u_name">
        <!-- Container Begins -->
        <div class="container">
            <!-- Row Begin -->
            <div class="row">
                <!-- Col Begin -->
                <div class="col-md-12 offer">
                
                    <a href="#" class="btn btn-success btn-sm">
                    
                        <?php 
                        
                            if(!isset($_SESSION['customer_email'])){
                                
                                echo "Welcome: Guest";
                                
                            }else{
                                
                                echo "Welcome: " . $_SESSION['customer_email'] . "";
                                
                            }
                        
                        ?>
                        
                    </a>
                    
                </div>
                <!-- Col Ends -->
            </div>    
            <!-- Row Ends -->   
        </div>
        <!-- Container Ends -->
    </div>
    <!-- User Name Ends -->
    
    <!-- Top Begins -->
    <div id="top">
        <!-- Container Begins -->
        <div class="container">
            <!-- Row Begin -->
            <div class="row">
                <!-- Col Begin -->
                <div class="col-md-6 offer">

                    <a href="../checkout.php"><?php items(); ?> Items In Your Cart | Total Price <?php total_price(); ?></a>
                    
                </div>
                <!-- Col Ends -->
                
                <!-- Col Begin -->
                <div class="col-md-6">
                    <!-- Menu Begin -->
                    <ul class="menu">
                        <!-- Menu-List Begin -->
                        <li>
                            <?php
                            
                        if(!isset($_SESSION['customer_email'])){
                                    
                            echo "<a href='../customer_register.php'>Register</a>'";
                                    
                        }else{
                                    
                            echo "<a href='my_account.php?edit_account'>Edit Account</a>'";
                                    
                        }
                            
                    ?>
                        </li>
                        <li>
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Go to Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">
                            
                                <?php 
                                
                                   if(!isset($_SESSION['customer_email'])){
                                
                                        echo "<a href='checkout.php'>Login</a>";
                                
                                    }else{
                                
                                        echo "<a href='logout.php'>Logout</a>";
                                
                                    } 
                                
                                ?>
                                
                            </a>
                        </li>
                        <!-- Menu-List Ends -->
                    </ul>
                    <!-- Menu Ends -->    
                </div>
                <!-- Col Ends -->
            </div>    
            <!-- Row Ends -->   
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Top Ends -->

    <!-- Navbar Begin -->
    <div id="navbar" class="navbar navbar-default">
        <!-- Navbar Container Begin -->
        <div class="container">
            <!-- Navbar Header Begin -->
            <div class="navbar-header">
                <!-- Navbar Brand Begin -->
                <a href="../index.php" class="navbar-brand home">
                    <!-- Site Logo -->
                    <img src="images/last-logo--.png" alt="site-logo" class="hidden-xs">
                    <img src="images/last-logo----.png" alt="site-logo" class="visible-xs">
                    <!-- Site Logo -->
                </a>
                <!-- Navbar Brand Ends -->
                
                <!-- Mobile Menu Button -->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
                <!-- Mobile Menu Button /-->
            </div>
            <!-- Navbar Header Ends -->
            
            <!-- Navbar Menu Begins -->
            <div class="navbar-collapse collapse" id="navigation">
                <!-- Nav Padding -->
                <div class="padding-nav">
                    <!-- Menu List Begin -->
                    <ul class="nav navbar-nav left">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">My Cart</a>
                        </li>
                        <li>
                            <a href="../contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <!-- Menu List End -->
                </div>
                <!-- Nav Padding /-->
                
                <!-- My Cart -->
                <a href="../cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> Items In Your Cart</span>
                </a>
                <!-- My Cart /-->
                
                <!-- Search -->
                <div class="navbar-collapse collapse right">
                    <!-- Search Button -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                    
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- Search Button -->
                </div>
                <!-- Search /-->
                
                <!-- Search Toggle -->
                <div class="collapse clearfix" id="search">
                    <!-- Search Form -->
                    <form method="get" action="results.php" class="navbar-form">
                        <!-- Form Input Group --> 
                        <div class="input-group">
                            <input type="" class="form-control" placeholder="Search Items" name="user_query" required>
                            
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>    
                        </div>
                        <!-- Form Input Group /-->
                    </form>
                    <!-- Search Form /-->
                </div>
                <!-- Search Toggle /-->
            </div>
            <!-- Navbar Menu Ends -->
        </div>
        <!-- Navbar Container Ends -->
    </div>
    <!-- Navbar Ends -->
    
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
                        My Account
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
                    <h1 align="center">Please Confirm Payment</h1>
                    
                    <!-- Form Begin -->
                    <form action="confirm.php?update_id=<?php echo $order_id ?>" method="post" enctype="multipart/form-data">
                        
                        <!-- Bootstrap Form Group Begin -->
                        <div class="form-group">
                            <label>Select Payment Mode: </label>
                            
                            <select name="payment_mode" class="form-control" onchange="abc(this)" id="p_mode">
                                <option value="1" disabled selected>Select One</option>
                                <option value="Invoice">Invoice</option>
                                <option value="Cash on Delivery">Cash On Delivery</option>
                            </select>
                        </div>
                        <!-- Bootstrap Form Group Ends -->
                        
                        <!-- Payment Group Begins -->
                        <div class="payment_grp" id="payment_grp" style="display:none;">
                        
                        <!-- Bootstrap Form Group Begin -->
                        <div class="form-group">
                            <label>Invoice No: </label>
                            
                            <input type="text" id="invoice_no" class="form-control" name="invoice_no" required>
                        </div>
                        <!-- Bootstrap Form Group Ends -->
                        
                        <!-- Bootstrap Form Group Begin -->
                        <div class="form-group">
                            <label>Amount Sent: </label>
                            
                            <input type="text" id="amount_sent" class="form-control" name="amount_sent" required>
                        </div>
                        <!-- Bootstrap Form Group Ends -->
                        
                        <!-- Bootstrap Form Group Begin -->
                        <div class="form-group">
                            <label>Transaction/Refernce ID: </label>
                            
                            <input type="text" id="ref_no" class="form-control" name="ref_no" required>
                        </div>
                        <!-- Bootstrap Form Group Ends -->
                        
                        <!-- Bootstrap Form Group Begin -->
                        <div class="form-group">
                            <label>PayPal Code: </label>
                            
                            <input type="number" id="code" class="form-control" name="code" required>
                        </div>
                        <!-- Bootstrap Form Group Ends -->
                        
                        <!-- Bootstrap Form Group Begin -->
                        <div class="form-group">
                            <label>Payment Date: </label>
                            
                            <input type="text" id="date" class="form-control" name="date" required>
                        </div>
                        <!-- Bootstrap Form Group Ends -->
                        </div>
                        <!-- Payment Group Ends -->
                        
                        <!-- Center Text/Button -->
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg" name="confirm_payment">
                                <i class="fa fa-user-md"></i>&nbsp;Confirm Payment
                            </button>
                        </div>
                        <!-- Center Text/Button -->
                    </form>
                    <!-- Form Ends -->
                    
                    <?php 
                    
                    if(isset($_POST['confirm_payment'])){
                        
                        $update_id = $_GET['update_id'];
                        
                        $invoive_no = $_POST['invoice_no'];
                        
                        $amount = $_POST['amount_sent'];
                        
                        $payment_mode = $_POST['payment_mode'];
                        
                        $ref_no = $_POST['ref_no'];
                        
                        $code = $_POST['code'];
                        
                        $payment_date = $_POST['date'];
                        
                        $complete = "Complete";
                        
                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoive_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                        
                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_customer_order = mysqli_query($con,$update_customer_order);
                        
                        $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                        
                        $run_pending_order = mysqli_query($con,$update_pending_order);
                        
                        if($run_pending_order){
                            
                            echo "<script>alert('Thank You For purchasing, your orders will be delivered in 2-3 working days')</script>";
                            
                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            
                        }
                        
                    }
                    
                    ?>
                </div>
                <!-- Box Ends -->
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
    <script>
    function abc(val) {
        var chks = document.getElementsByName("invoice_no");
        var amt = document.getElementsByName("amount_sent");
        var ref = document.getElementsByName("ref_no");
        var cod = document.getElementsByName("code");
        var dat = document.getElementsByName("date");

        if (val.value == 'Cash on Delivery') {
            for (var i = 0; i <= chks.length - 1; i++) {
                chks[i].disabled = true;
                amt[i].disabled = true;
                ref[i].disabled = true;
                cod[i].disabled = true;
                dat[i].disabled = true;
                $('#payment_grp').hide();
            }
        }
        else {
            for (var i = 0; i <= chks.length - 1; i++) {
                chks[i].disabled = false;
                amt[i].disabled = false;
                ref[i].disabled = false;
                cod[i].disabled = false;
                dat[i].disabled = false;
                $('#payment_grp').show();
            }
        }
    }
</script>
    
</body>
</html>

<?php 

}
    
?>