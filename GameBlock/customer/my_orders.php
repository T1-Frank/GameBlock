<!-- Center Begin -->
<center>
    <h1>My Orders</h1>
    <p class="lead">Your Orders</p>
    <p class="muted">If you have any Questions, feel free to <a href="../contact.php">Contact us</a>. Our Customer Service works <strong>24/7</strong></p>
</center>
<!-- Center Ends -->

<hr>

<!-- Parent Table Begins -->
<div class="table-responsive">
    <!-- Table Begins -->
    <table class="table table-bordered table-hover">
        <!-- Thead Begins -->
        <thead>
            
            <!-- tr Begins -->
            <tr>
                <th>ON: </th>
                <th>Qty: </th>
                <th>Order Date: </th>
                <th>Due Amount: </th>
                <th>Invoice No: </th>
                <th>Paid/Unpaid </th>
                <th>Status: </th>
            </tr>
            <!-- tr Ends -->
            
        </thead>
        <!-- Thead Ends -->
        
        <!-- Tbody Begins -->
        <tbody>
            
            <?php 
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer );
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['order_id'];
                
                $qty = $row_orders['qty'];
                
                $order_date = substr($row_orders['order_date'],0,11);
                
                $due_amount = $row_orders['due_amount'];
                
                $invoice_no = $row_orders['invoice_no'];
                
                $order_status = $row_orders['order_status'];
                
                $i++;
                
                if($order_status=='pending'){
                    
                    $order_status = 'Unpaid';
                    
                }else{
                    
                    $order_status = 'Paid';
                    
                }
                
            ?>
            
            <!-- tr Begins -->
            <tr>
                
                <th> <?php echo $i; ?> </th>
                
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> R<?php echo $due_amount; ?>.00 </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                <td>
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" id="c_btn" class="btn btn-primary btn-sm" onclick="setTimeout(function(){document.getElementById('c_btn').removeAttribute('href');}, 1);">Confirm Paid</a>
                </td>
                
            </tr>
            <!-- tr Ends -->
            
            <?php } ?>
        
        </tbody>
        <!-- Tbody Ends -->
    </table>
    <!-- Table Ends -->
</div>
<!-- Parent Table Ends -->


