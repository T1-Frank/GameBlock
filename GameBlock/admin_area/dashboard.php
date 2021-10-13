<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>


<!-- Bootstrap Row Begins -->
<div class="row">
    <!-- Bootstrap Column lg-12 Begins -->
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
        
        <!-- Bootstrap Breadcrumb Begins -->
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard
                
            </li>
        </ol>
        <!-- Bootstrap Breadcrumb Ends -->
        
    </div>
    <!-- Bootstrap Column lg-12 Ends -->
</div>
<!-- Bootstrap Row Ends -->

<!-- Bootstrap Row Begins -->
<div class="row">
    <!-- Bootstrap Column lg-12 / md-6 Begins -->
    <div class="col-lg-3 col-md-6">
        <!-- Bootstrap Panel Begins -->
        <div class="panel panel-primary">
            <!-- Bootstrap Panel Heading Begins -->
            <div class="panel-heading">
                <!-- Bootstrap Row Begins -->
                <div class="row">
                    <!-- Bootstrap Column xs-3 Begins -->
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <!-- Bootstrap Column xs-3 Ends -->
                    
                    <!-- Bootstrap Column xs-9 Begins -->
                    <div class="col-xs-9 text-right">
                        <!-- Huge Begins -->
                        <div class="huge"> <?php echo $count_products; ?> </div>
                            <div>Products</div>
                        <!-- Huge Ends -->
                    </div>
                    <!-- Bootstrap Column xs-9 Ends -->
                    
                </div>
                <!-- Bootstrap Row Ends -->
            </div>
            <!-- Bootstrap Panel Heading Ends -->
            
            <!-- Link View-Products Begins -->
            <a href="index.php?view_product">
                <!-- Bootstrap Panel Footer Begins -->
                <div class="panel-footer">
                    <!-- Pull Left Begins -->
                    <span class="pull-left">
                        View Details
                    </span>
                    <!-- Pull Left Ends -->
                    
                    <!-- Pull Right Begins -->
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <!-- Pull Right Ends -->
                    
                    <div class="clearfix"></div>
                    
                </div>
                <!-- Bootstrap Panel Footer Ends -->
            </a>
            <!-- Link View-Products Ends -->
            
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Column lg-12 / md-6 Ends -->
    
    <!-- Bootstrap Column lg-12 / md-6 Begins -->
    <div class="col-lg-3 col-md-6">
        <!-- Bootstrap Panel Begins -->
        <div class="panel panel-green">
            <!-- Bootstrap Panel Heading Begins -->
            <div class="panel-heading">
                <!-- Bootstrap Row Begins -->
                <div class="row">
                    <!-- Bootstrap Column xs-3 Begins -->
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <!-- Bootstrap Column xs-3 Ends -->
                    
                    <!-- Bootstrap Column xs-9 Begins -->
                    <div class="col-xs-9 text-right">
                        <!-- Huge Begins -->
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                        <!-- Huge Ends -->
                        
                        <div>Customers</div>
                    </div>
                    <!-- Bootstrap Column xs-9 Ends -->
                    
                </div>
                <!-- Bootstrap Row Ends -->
            </div>
            <!-- Bootstrap Panel Heading Ends -->
            
            <!-- Link View-Products Begins -->
            <a href="index.php?view_customers">
                <!-- Bootstrap Panel Footer Begins -->
                <div class="panel-footer">
                    <!-- Pull Left Begins -->
                    <span class="pull-left">
                        View Details
                    </span>
                    <!-- Pull Left Ends -->
                    
                    <!-- Pull Right Begins -->
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <!-- Pull Right Ends -->
                    
                    <div class="clearfix"></div>
                    
                </div>
                <!-- Bootstrap Panel Footer Ends -->
            </a>
            <!-- Link View-Products Ends -->
            
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Column lg-12 / md-6 Ends -->
    
    <!-- Bootstrap Column lg-12 / md-6 Begins -->
    <div class="col-lg-3 col-md-6">
        <!-- Bootstrap Panel Begins -->
        <div class="panel panel-orange">
            <!-- Bootstrap Panel Heading Begins -->
            <div class="panel-heading">
                <!-- Bootstrap Row Begins -->
                <div class="row">
                    <!-- Bootstrap Column xs-3 Begins -->
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>
                    <!-- Bootstrap Column xs-3 Ends -->
                    
                    <!-- Bootstrap Column xs-9 Begins -->
                    <div class="col-xs-9 text-right">
                        <!-- Huge Begins -->
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                        <!-- Huge Ends -->
                        
                        <div>Product Categories</div>
                    </div>
                    <!-- Bootstrap Column xs-9 Ends -->
                    
                </div>
                <!-- Bootstrap Row Ends -->
            </div>
            <!-- Bootstrap Panel Heading Ends -->
            
            <!-- Link View-Products Begins -->
            <a href="index.php?view_p_cats">
                <!-- Bootstrap Panel Footer Begins -->
                <div class="panel-footer">
                    <!-- Pull Left Begins -->
                    <span class="pull-left">
                        View Details
                    </span>
                    <!-- Pull Left Ends -->
                    
                    <!-- Pull Right Begins -->
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <!-- Pull Right Ends -->
                    
                    <div class="clearfix"></div>
                    
                </div>
                <!-- Bootstrap Panel Footer Ends -->
            </a>
            <!-- Link View-Products Ends -->
            
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Column lg-12 / md-6 Ends -->
    
    <!-- Bootstrap Column lg-12 / md-6 Begins -->
    <div class="col-lg-3 col-md-6">
        <!-- Bootstrap Panel Begins -->
        <div class="panel panel-red">
            <!-- Bootstrap Panel Heading Begins -->
            <div class="panel-heading">
                <!-- Bootstrap Row Begins -->
                <div class="row">
                    <!-- Bootstrap Column xs-3 Begins -->
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <!-- Bootstrap Column xs-3 Ends -->
                    
                    <!-- Bootstrap Column xs-9 Begins -->
                    <div class="col-xs-9 text-right">
                        <!-- Huge Begins -->
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                        <!-- Huge Ends -->
                        
                        <div>Orders</div>
                    </div>
                    <!-- Bootstrap Column xs-9 Ends -->
                    
                </div>
                <!-- Bootstrap Row Ends -->
            </div>
            <!-- Bootstrap Panel Heading Ends -->
            
            <!-- Link View-Products Begins -->
            <a href="index.php?view_orders">
                <!-- Bootstrap Panel Footer Begins -->
                <div class="panel-footer">
                    <!-- Pull Left Begins -->
                    <span class="pull-left">
                        View Details
                    </span>
                    <!-- Pull Left Ends -->
                    
                    <!-- Pull Right Begins -->
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <!-- Pull Right Ends -->
                    
                    <div class="clearfix"></div>
                    
                </div>
                <!-- Bootstrap Panel Footer Ends -->
            </a>
            <!-- Link View-Products Ends -->
            
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Column lg-12 / md-6 Ends -->
</div>
<!-- Bootstrap Row Ends -->

<!-- Bootstrap Row Begins -->
<div class="row">
    <!-- Bootstrap Column lg-8 Begins -->
    <div class="col-lg-8">
        <!-- Bootstrap Panel Begins -->
        <div class="panel panel-primary">
            <!-- Panel Heading -->
            <div class="panel-heading">
                <!-- Panel Title -->
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> New Orders
                </h3>
                <!-- Panel Title /-->
            </div>
            <!-- Panel Heading /-->
            
            <!-- Panel Body -->
            <div class="panel-body">
                <!-- Bootstrap Responsive Table Begins --> 
                <div class="table-responsive">
                    <!-- Table Begins -->
                    <table class="table table-hover table-striped table-bordered">
                        
                        <!-- Thead Begins -->
                        <thead>
                            <tr>
                                <th>Order No:</th>
                                <th>Customer Email:</th>
                                <th>Invoice No:</th>
                                <th>Product ID:</th>
                                <th>Product Qty:</th>
                                <th>Status:</th>
                            </tr>
                        </thead>
                        <!-- Thead Ends -->
                        
                        <!-- Tbody Begins -->
                        <tbody>
                            
                            <?php 
                            
                            $i=0;
                            
                            $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,4";
                                
                            $run_order = mysqli_query($con,$get_order);
                
                            while($row_order=mysqli_fetch_array($run_order)){
                                
                                $order_id = $row_order['order_id'];
                                
                                $c_id = $row_order['customer_id'];
                                
                                $invoice_no = $row_order['invoice_no'];
                                
                                $product_id = $row_order['product_id'];
                                
                                $qty = $row_order['qty'];
                                
                                $order_status = $row_order['order_status'];
                                
                                $i++;
                            
                            ?>
                            
                            <tr>
                                
                                <td><?php echo $order_id; ?></td>
                                
                                <td>
                                
                                    <?php 
                                    
                                        $get_customer = "select * from customers where customer_id='$c_id'";
                                
                                        $run_customer = mysqli_query($con,$get_customer);
                                
                                        $row_customer = mysqli_fetch_array($run_customer);
                                
                                        $customer_email = $row_customer['customer_email'];
                                
                                        echo $customer_email;
                                    
                                    ?>
                                    
                                </td>
                                <td><?php echo $invoice_no; ?></td>
                                <td><?php echo $product_id; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td>
                                    <?php 
                                    
                                    if($order_status=='pending'){
                                        
                                        echo $order_status='Pending';
                                        
                                    }else{
                                        
                                        echo $order_status='Complete';
                                        
                                    }
                                    
                                    ?>
                                </td>
                                
                            </tr>
                            
                            <?php } ?>
                        
                        </tbody>
                        <!-- Tbody Ends -->
                    </table>
                    <!-- Table Ends -->
                </div>
                <!-- Bootstrap Responsive Table Ends --> 
                
                <!-- Text Right Begins -->
                <div class="text-right">
                    <a href="index.php?view_orders">
                        
                        View All Orders <i class="fa fa-arrow-circle-right"></i>
                        
                    </a>
                </div>
                <!-- Text Right Ends -->
                
            </div>
            <!-- Panel Body /-->
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Column lg-8 Ends -->
    
    <!-- Bootstrap Column md-4 Begins -->
    <div class="col-md-4">
        <!-- Bootstrap Panel Begins -->
        <div class="panel">
            <!-- Bootstrap Panel Body Begins -->
            <div class="panel-body">
                <!-- Info Box Begins -->
                <div class="mb-md thumb-info">
                    <img src="admin_images/<?php echo $admin_image; ?>" alt="" class="rounded img-responsive">
                    
                    <!-- Info Title -->
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"><?php echo $admin_name; ?></span>
                        <span class="thumb-info-type"><?php echo $admin_job; ?></span>
                    </div>
                    <!-- Info Title /-->
                </div>
                <!-- Info Box Ends -->
                
                <!-- Mb-Md Begins -->
                <div class="mb-md">
                    <!-- Widgets Begins -->
                    <div class="widget-content-expanded">
                        <i class="fa fa-user"></i><span> Email:</span> <?php echo $admin_email; ?><br/>
                        <i class="fa fa-flag"></i><span>Country:</span> <?php echo $admin_country; ?><br/>
                        <i class="fa fa-envelope"></i><span>Contact:</span> <?php echo $admin_contact; ?><br/>
                    </div>
                    <!-- Widgets Ends -->
                    
                    <hr class="dotted short" style="margin:10px 0 10px 0;">
                    
                    <h5 class="text-muted">About Me</h5>
                    
                    <p>
                        <?php echo $admin_about; ?>
                    </p>
                    
                    
                    
                </div>
                <!-- Mb-Md Ends -->
                
            </div>
            <!-- Bootstrap Panel Body Ends -->
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Column md-4 Ends -->
</div>
<!-- Bootstrap Row Ends -->

<?php } ?>