<!-- Parent Panel Begins -->
<div class="panel panel-default sidebar-menu">
    <!-- Panel Heading Begins -->
    <div class="panel-heading">
        <?php 
        
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_image = $row_customer['customer_image'];
        
        $customer_name = $row_customer['customer_name'];
        
        if(!isset($_SESSION['customer_email'])){
            
            
            
        }else{
            
            echo "
            
                <center>
                
                    <img src='customer_images/$customer_image' class='img-responsive'>
                
                </center>
                
                <br/>
                
                <h3 class='panel-title' align='center'>
                
                    Name: $customer_name
                
                </h3>
            
            ";
            
        }
        
        ?>
    </div>
    <!-- Panel Heading Ends -->
    
    <!-- Panel Body Begins -->
    <div class="panel-body">
        <!-- Panel Nav Pills/Stacked Begins -->
        <ul class="nav-pills nav-stacked nav">
            <!-- li for Nav Pill Begins -->
            <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; }?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i>&nbsp;&nbsp;My Orders
                </a>
            </li>
            
            
            <li class="<?php if(isset($_GET['pay_offline'])){ echo "active"; }?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i>&nbsp;&nbsp;Pay Offline
                </a>
            </li>
            

            <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; }?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Account
                </a>
            </li>
            
            
            <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; }?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-key"></i>&nbsp;&nbsp;Change Password
                </a>
            </li>
            

            <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; }?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i>&nbsp;&nbsp;Delete Account
                </a>
            </li>
            
            
            <li>
                <a href="logout.php">
                    <i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log Out
                </a>
            </li>
            
            <!-- li for Nav Pill Ends -->
        </ul>
        <!-- Panel Nav Pills/Stacked Ends -->
    </div>
    <!-- Panel Body Ends -->
</div>
<!-- Parent Panel Ends -->