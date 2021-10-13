<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

<!-- Bootstrap Row Begins -->
<div class="row">
    <!-- Bootstrap Col lg-12 Begins -->
    <div class="col-lg-12">
        <!-- Bootstrap Breadcrumb Begins -->
        <ol class="breadcrumb">
            <!-- li Begins -->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
            </li>
            <!-- li Ends -->
        </ol>
        <!-- Bootstrap Breadcrumb Ends -->
    </div>
    <!-- Bootstrap Col lg-12 Ends -->
</div>
<!-- Bootstrap Row Ends -->

<!-- Bootstrap Row Begins -->
<div class="row">
    <!-- Bootstrap Col lg-12 Begins -->
    <div class="col-lg-12">
        <!-- Bootstrap Panel Begins -->
        <div class="panel panel-default">
            <!-- Panel-Heading Begins -->
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> View Orders
                </h3>    
            </div>
            <!-- Panel-Heading Ends -->
            
            <!-- Panel-Body Begins -->
            <div class="panel-body">
                <!-- Bootstrap Table-Responsive Begins -->
                <div class="table-responsive">
                    <!-- Table Begins -->
                    <table class="table table-striped table-bordered table-hover">
                        
                        <!-- thead Begins -->
                        <thead>
                            <!-- tr Begins -->
                            <tr>
                                <!-- th Begins -->
                                <th>No:</th>
                                <th>Customer Email:</th>
                                <th>Invoice No:</th>
                                <th>Product Name:</th>
                                <th>Product Qty:</th>
                                <th>Order Date:</th>
                                <th>Total Amount:</th>
                                <th>Status:</th>
                                <th>Delete:</th>
                                <!-- th Ends -->
                            </tr>
                            <!-- tr Ends -->
                        </thead>
                        <!-- thead Ends -->
                        
                        <!-- tbody Begins -->
                        <tbody>
                            
                            <?php
            
                                $i=0;
      
                                $get_orders = "select * from pending_orders";
                
                                $run_orders = mysqli_query($con,$get_orders);
      
                                while($row_orders=mysqli_fetch_array($run_orders)){
                                    
                                    $order_id = $row_orders['order_id'];
                                    
                                    $c_id = $row_orders['customer_id'];
                                    
                                    $invoice_no = $row_orders['invoice_no'];
                                    
                                    $product_id = $row_orders['product_id'];
                                    
                                    $qty = $row_orders['qty'];
                                    
                                    $order_status = $row_orders['order_status'];
                                    
                                    $get_products = "select * from product where product_id='$product_id'";
                                    
                                    $run_products = mysqli_query($con,$get_products);
                                    
                                    $row_products = mysqli_fetch_array($run_products);
                                    
                                    $product_title = $row_products['product_title'];
                                    
                                    $get_customer = "select * from customers where customer_id='$c_id'";
                                    
                                    $run_customer = mysqli_query($con,$get_customer);
                                    
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    
                                    $customer_email = $row_customer['customer_email'];
                                    
                                    $get_c_order = "select * from customer_orders where order_id='$order_id'";
                                    
                                    $run_c_order = mysqli_query($con,$get_c_order);
                                    
                                    $row_c_order = mysqli_fetch_array($run_c_order);
                                    
                                    $order_date = $row_c_order['order_date'];
                                    
                                    $order_amount = $row_c_order['due_amount'];
                                    
                                    $i++;
                                    
                            ?>
                            
                            <!-- tr Begins -->
                            <tr>
                                <!-- td Begins -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $customer_email; ?></td>
                                <td><?php echo $invoice_no; ?></td>
                                <td width="150"><?php echo $product_title; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo $order_date; ?></td>
                                <td>R<?php echo $order_amount; ?>.00</td>
                                <td>
                                    <?php 
                                    
                                    if($order_status=='pending'){
                                        
                                        echo $order_status='Pending';
                                        
                                    }else{
                                        
                                        echo $order_status='Complete';
                                    }
                                    
                                    ?>
                                </td>
                                <td>
                                    <a href="index.php?delete_order=<?php echo $order_id; ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                                <!-- td Ends -->
                            </tr>
                            <!-- tr Ends -->
                            
                            <?php } ?>
                            
                        </tbody>
                        <!-- tbody Ends -->
                        
                    </table>
                    <!-- Table Ends -->
                </div>
                <!-- Bootstrap Table-Responsive Ends -->
            </div>
            <!-- Panel-Body Ends -->
        </div>
        <!-- Bootstrap Panel Ends -->
    </div>
    <!-- Bootstrap Col lg-12 Ends -->
</div>
<!-- Bootstrap Row Ends -->


<?php } ?>