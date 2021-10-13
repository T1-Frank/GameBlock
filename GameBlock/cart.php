<?php 

    $active='Cart';
    include("includes/header.php");

?>
    
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
                        Cart
                    </li>
                    <!-- BreadCrumb li Ends -->
                </ul>
                <!-- Bootstrap BreadCrumb Ends -->
            </div>
            <!-- Bootstrap Column md-12 Ends -->
            
            <!-- Bootstrap Column md-9/Cart Begins -->
            <div id="cart" class="col-md-9">
                <!-- Box Begin -->
                <div class="box">
                    <!-- Form Begin -->
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        
                        <h1>Shopping Cart</h1>
                        
                        <?php 
                        
                            $ip_add = getRealIpUser();
                        
                            $select_cart = "select * from cart where ip_add='$ip_add'";
                        
                            $run_cart = mysqli_query($con,$select_cart);
                        
                            $count = mysqli_num_rows($run_cart);
                        
                        ?>
                        <p class="text-muted">You Currently Have <?php echo $count; ?> Items in Your Cart</p>
                        
                        <!-- Responsive Table Begins -->
                        <div class="table-responsive">
                            <!-- Table Begin -->
                            <table class="table">
                                <!-- thead Begin -->
                                <thead>
                                    <!-- tr Begin -->
                                    <tr>
                                        <!-- th Begin -->
                                        <th colspan="2">Product</th>
                                        <th>Quanity</th>
                                        <th>Price</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                        <!-- th Ends -->
                                    </tr>
                                    <!-- tr Ends -->
                                </thead>
                                <!-- thead Ends -->
                                
                                <!-- tbody Begin -->
                                <tbody>
                                    
                                    <?php 
                                    
                                    $total = 0;
                                    
                                    while($row_cart = mysqli_fetch_array($run_cart)){
                                        
                                        $pro_id = $row_cart['p_id'];
                                        
                                        $pro_qty = $row_cart['qty'];
                                        
                                        $get_products = "select * from product where product_id='$pro_id'";
                                        
                                        $run_products = mysqli_query($con,$get_products);
                                        
                                        while($row_products = mysqli_fetch_array($run_products)){
                                            
                                            $product_title = $row_products['product_title'];
                                            
                                            $product_img1 = $row_products['product_img1'];
                                            
                                            $only_price = $row_products['product_price'];
                                            
                                            $sub_total = $row_products['product_price']*$pro_qty;
                                            
                                            $total += $sub_total;
                                        
                                    ?>
                                    <!-- tr Begin -->
                                    <tr>
                                        <!-- td Begins -->
                                        <td>
                                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 7">
                                        </td>
                                        
                                        <td>
                                            <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>
                                        </td>
                                        
                                        <td>
                                            <?php echo $pro_qty; ?>
                                        </td>
                                        
                                        <td>
                                            R<?php echo  $only_price; ?>.00
                                        </td>
                                        
                                        <td>
                                            <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                        </td>
                                            
                                        <td>
                                            R<?php echo $sub_total; ?>.00
                                        </td>
                                        <!-- td Ends -->
                                    </tr>
                                    <!-- tr Ends -->
                                    
                                    <?php } } ?>
                                    
                                </tbody>
                                <!-- tbody Ends -->
                                
                                <!-- tfoot Begin -->
                                <tfoot>
                                    <!-- tr Begin -->
                                    <tr>
                                        <!-- th Begin -->
                                        <th colspan="6">Total</th>
                                        
                                        <th colspan="2">R<?php echo $total; ?>.00</th>
                                        <!-- th Ends -->
                                    </tr>
                                    <!-- tr Ends -->
                                </tfoot>
                                <!-- tfoot Ends -->
                            </table>
                            <!-- Tale Ends -->
                        </div>
                        <!-- Responsive Table Ends -->
                        
                        <!-- Box Footer Begin -->
                        <div class="box-footer">
                            <!-- Pull Left Begin -->
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Continue Shopping
                                </a>
                            </div>
                            <!-- Pull Left Ends -->
                            
                            <!-- Pull Right Begin -->
                            <div class="pull-right">
                                <button type="submit" name="update" value="Update Cart" href="index.php" class="btn btn-default">
                                    <i class="fa fa-refresh"></i>&nbsp;&nbsp;Update Cart
                                </button>
                                &nbsp;
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to Checkout&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                            <!-- Pull Right Ends -->
                        </div>
                        <!-- Box Footer Ends -->
                    </form>
                    <!-- Form Ends -->
                </div>
                <!-- Box Ends -->
                
                <?php 
                
                    function update_cart(){
                        
                        global $con;
                        
                        if(isset($_POST['update'])){
                            
                            foreach($_POST['remove'] as $remove_id){
                                
                                $delete_product = "delete from cart where p_id='$remove_id'";
                                
                                $run_delete = mysqli_query($con,$delete_product);
                                
                                if($run_delete){
                                    
                                    echo "<script>window.open('cart.php','_self')</script>";
                                    
                                }
                                
                            }
                            
                        }
                        
                    }
                
                echo @$up_cart = update_cart();
                
                ?>
                
                <!-- Same Height Row Begins -->
                <div id="row same-height-row">
                    <!-- Bootstrap Text Center Begins -->
                    <h3 class="text-center b_mar">Products You May Like</h3>
                    
                    <?php
                    
                        $get_products = "select * from product order by rand() LIMIT 0,4";
                            
                        $run_products = mysqli_query($con,$get_products);
                    
                        while($row_products = mysqli_fetch_array($run_products)){
                            
                            $pro_id = $row_products['product_id'];
                            
                            $pro_title = $row_products['product_title'];
                            
                            $pro_price = $row_products['product_price'];
                            
                            $pro_img1 = $row_products['product_img1'];
                            
                            echo "
                            
                                
                                <!-- Bootstrap Column md-3/sm-6 Begins -->
                                    <div class='col-md-3 col-sm-6 center-responsive'>
                                        <!-- Product/Same Height Begin -->
                                        <div class='product same-height'>
                                            <a href='details.php?pro_id=$pro_id'>
                                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'                alt='product 4'>
                                            </a>
                            
                                            <!-- Text Begin -->
                                            <div class='text'>
                                                <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                                <p class='price'>R$pro_price.00</p>
                                            </div>
                                            <!-- Text Ends -->
                                        </div>
                                        <!-- Product/Same Height Ends -->
                                    </div>
                                <!-- Bootstrap Column md-3/sm-6 Ends -->
                    ";
                            
                    }
                    
                    ?>
                </div>
                <!-- Same Height Row Ends -->
            </div>
            <!-- Bootstrap Column md-9/Cart Ends -->
            
            <!-- Bootstrap Column md-3 Begins -->
            <div class="col-md-3">
                <!-- Order Summary/Box Begin -->
                <div id="order-summary" class="box">
                    <!-- Box Header Begin -->
                    <div class="box-header">
                        <h3>Order Summary</h3>
                        
                        <!-- Muted Text -->
                        <p class="text-muted">
                            Shipping And Additional Costs Are Calculated According To The Product You Are Buying
                        </p>
                        <!-- Muted Text /-->
                        
                        <!-- Bootstrap table Begin -->
                        <div class="table-responsive">
                            <!-- Table Begins -->
                            <table class="table">
                                <!-- tbody Begin -->
                                <tbody>
                                    <!-- tr Begin -->
                                    <tr>
                                        <td>Order Sub-Total</td>
                                        <th>R<?php echo $total; ?>.00</th>
                                    </tr>
                                    <!-- tr End -->
                                    
                                    <!-- tr Begin -->
                                    <tr>
                                        <td>Shipping & Handling</td>
                                        <th>R0.00</th>
                                    </tr>
                                    <!-- tr End -->
                                    
                                    <!-- tr Begin -->
                                    <tr>
                                        <td>Tax</td>
                                        <th>R0.00</th>
                                    </tr>
                                    <!-- tr End -->
                                    
                                    <!-- tr Begin -->
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>R<?php echo $total; ?>.00</th>
                                    </tr>
                                    <!-- tr End -->
                                </tbody>
                                <!-- tbody Ends -->
                            </table>
                            <!-- Table Ends -->
                        </div>
                        <!-- Bootstrap table Ends -->
                    </div>
                    <!-- Box Header Ends -->
                </div>
                <!-- Order Summary/Box Ends -->
            </div>
            <!-- Bootstrap Column md-3 Ends -->
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
    
    
</body>
</html>