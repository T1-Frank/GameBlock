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
                <i class="fa fa-dashboard"></i> Dashboard / View Customers
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
                    <i class="fa fa-tags"></i> View Customers
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
                                <th>Name:</th>
                                <th>Image:</th>
                                <th>E-mail:</th>
                                <th>Country:</th>
                                <th>City:</th>
                                <th>Address:</th>
                                <th>Contact:</th>
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
      
                                $get_c = "select * from customers";
                
                                $run_c = mysqli_query($con,$get_c);
      
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $c_id = $row_c['customer_id'];
                                    
                                    $c_name = $row_c['customer_name'];
                                    
                                    $c_img = $row_c['customer_image'];
                                    
                                    $c_email = $row_c['customer_email'];
                                    
                                    $c_country = $row_c['customer_country'];
                                    
                                    $c_city = $row_c['customer_city'];
                                    
                                    $c_address = $row_c['customer_address'];
                                    
                                    $c_contact = $row_c['customer_contact'];
                                    
                                    $i++;
                                    
                            ?>
                            
                            <!-- tr Begins -->
                            <tr>
                                <!-- td Begins -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $c_name; ?></td>
                                <td><img src="../customer/customer_images/<?php echo $c_img; ?>" width="60" height="60"></td>
                                <td><?php echo $c_email; ?></td>
                                <td><?php echo $c_country; ?></td>
                                <td><?php echo $c_city; ?></td>
                                <td width="200"><?php echo $c_address; ?></td>
                                <td><?php echo $c_contact; ?></td>
                                <td>
                                    <a href="index.php?delete_customer=<?php echo $c_id; ?>">
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