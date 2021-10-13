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
                <i class="fa fa-dashboard"></i> Dashboard / View Products
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
                    <i class="fa fa-tags"></i> View Products
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
                                <th>Product ID:</th>
                                <th>Product Title:</th>
                                <th>Product Image:</th>
                                <th>Product Price:</th>
                                <th>Product Sold:</th>
                                <th>Product Keywords:</th>
                                <th>Product Date:</th>
                                <th>Product Delete:</th>
                                <th>Product Edit:</th>
                                <!-- th Ends -->
                            </tr>
                            <!-- tr Ends -->
                        </thead>
                        <!-- thead Ends -->
                        
                        <!-- tbody Begins -->
                        <tbody>
                            
                            <?php
            
                                $i=0;
      
                                $get_pro = "select * from product";
                
                                $run_pro = mysqli_query($con,$get_pro);
      
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['product_id'];
                                    
                                    $pro_title = $row_pro['product_title'];
                                    
                                    $pro_img1 = $row_pro['product_img1'];
                                    
                                    $pro_price = $row_pro['product_price'];
                                    
                                    $pro_keywords = $row_pro['product_keywords'];
                                    
                                    $pro_date = $row_pro['date'];
                                    
                                    $i++;
                                    
                            ?>
                            
                            <!-- tr Begins -->
                            <tr>
                                <!-- td Begins -->
                                <td><?php echo $pro_id; ?></td>
                                <td><?php echo $pro_title; ?></td>
                                <td><img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td>R<?php echo $pro_price; ?>.00</td>
                                <td>
                                    <?php 
                                    
                                    $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                    
                                    $run_sold = mysqli_query($con,$get_sold);
                                    
                                    $count = mysqli_num_rows($run_sold);
                                    
                                    echo $count;
                                    
                                    ?>
                                </td>
                                <td><?php echo $pro_keywords; ?></td>
                                <td><?php echo $pro_date; ?></td>
                                <td>
                                    <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit
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