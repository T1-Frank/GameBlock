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
                <i class="fa fa-dashboard"></i> Dashboard / View Payments
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
                    <i class="fa fa-tags"></i> View Payments
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
                                <th>Invoice No:</th>
                                <th>Amount Paid:</th>
                                <th>Method:</th>
                                <th>Reference No:</th>
                                <th>Payment Code:</th>
                                <th>Payment Date:</th>
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
      
                                $get_payments = "select * from payments";
                
                                $run_payments = mysqli_query($con,$get_payments);
      
                                while($row_payments=mysqli_fetch_array($run_payments)){
                                    
                                    $payment_id = $row_payments['payment_id'];
                                    
                                    $invoice_no = $row_payments['invoice_no'];
                                    
                                    $amount = $row_payments['amount'];
                                    
                                    $payment_mode = $row_payments['payment_mode'];
                                    
                                    $ref_no = $row_payments['ref_no'];
                                    
                                    $code = $row_payments['code'];
                                    
                                    $payment_date = $row_payments['payment_date'];
                                    
                                    $i++;
                                    
                            ?>
                            
                            <!-- tr Begins -->
                            <tr>
                                <!-- td Begins -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $invoice_no; ?></td>
                                <td><?php echo $amount; ?></td>
                                <td><?php echo $payment_mode; ?></td>
                                <td><?php echo $ref_no; ?></td>
                                <td><?php echo $code; ?></td>
                                <td><?php echo $payment_date; ?></td>
                                <td>
                                    <a href="index.php?delete_payment=<?php echo $payment_id; ?>">
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