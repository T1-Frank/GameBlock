<?php 


if(!isset($_SESSION['admin_email'])){
    
    echo "<script>window.open('login.php','_self')</script>";
    
}else{

?>

    <!-- Bootstrap Row Begins -->
    <div class="row">
        <!-- Bootstrap Column lg-12 Begins -->
        <div class="col-lg-12">
            <!-- Bootstrap Breadcrumb Begins -->
            <ol class="breadcrumb">
                <!-- Bootstrap li Begins -->
                <li class="active">
                    
                    <i class="fa fa-dashboard"></i> DashBoard / View Products Categories
                    
                </li>
                <!-- Bootstrap li Ends -->
            </ol>
            <!-- Bootstrap Breadcrumb Ends -->
        </div>
        <!-- Bootstrap Column lg-12 Ends -->
    </div>
    <!-- Bootstrap Row Ends -->

    <!-- Bootstrap Row Begins -->
    <div class="row">
        <!-- Bootstrap Column lg-12 Begins -->
        <div class="col-lg-12">
            <!-- Bootstrap Panel Begins -->
            <div class="panel panel-default">
                <!-- Bootstrap panel-heading Begins -->
                <div class="panel-heading">
                    <!-- panel-title Begins -->
                    <h3 class="panel-title">
                        
                        <i class="fa fa-tags fa-fw"></i> View Products Categories
                        
                    </h3>
                    <!-- panel-title Ends -->
                </div>
                <!-- Bootstrap panel-heading Ends -->
                
                <!-- Bootstrap panel-body Begins -->
                <div class="panel-body">
                    <!-- Bootstrap Table-Responsive Begins -->
                    <div class="table-reponsive">
                        <!-- Table Begins -->
                        <table class="table table-hover table-striped table-bordered">
                            <!-- thead Begins -->
                            <thead>
                                <!-- tr Beins -->
                                <tr>
                                    <!-- th Begins -->
                                    <th>Product Category ID:</th>
                                    <th>Product Category Title:</th>
                                    <th>Product Category Desc:</th>
                                    <th>Edit Product Category:</th>
                                    <th>Delete Product Category:</th>
                                    <!-- th Ends -->
                                </tr>
                                <!-- tr Ends -->
                            </thead>
                            <!-- thead Ends -->
                            
                            <!-- tbody Begins -->
                            <tbody>
                                
                                <?php 
                                
                                    $i=0;
      
                                    $get_p_cats = "select * from product_categories";
      
                                    $run_p_cats = mysqli_query($con,$get_p_cats);
      
                                    while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                                        
                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        
                                        $p_cat_title = $row_p_cats['p_cat_title'];
                                        
                                        $p_cat_desc = $row_p_cats['p_cat_desc'];
                                        
                                        $i++;
                                                                        
                                ?>
                                
                                <!-- tr Begins -->
                                <tr>
                                    <!-- td Begins -->
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $p_cat_title; ?></td>
                                    <td width="300"><?php echo $p_cat_desc; ?></td>
                                    <td>
                                        <a href="index.php?edit_p_cat=<?php echo $p_cat_id; ?>">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?delete_p_cat=<?php echo $p_cat_id; ?>">
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
                <!-- Bootstrap panel-body Ends -->
            </div>
            <!-- Bootstrap Panel Ends -->
        </div>
        <!-- Bootstrap Column lg-12 Ends -->
    </div>
    <!-- Bootstrap Row Ends -->


<?php } ?>