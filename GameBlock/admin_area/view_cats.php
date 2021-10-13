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
                    
                    <i class="fa fa-dashboard"></i> DashBoard / View Categories
                    
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
                        
                        <i class="fa fa-tags fa-fw"></i> View Categories
                        
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
                                    <th>Category ID:</th>
                                    <th>Category Title:</th>
                                    <th>Category Desc:</th>
                                    <th>Edit Category:</th>
                                    <th>Delete Category:</th>
                                    <!-- th Ends -->
                                </tr>
                                <!-- tr Ends -->
                            </thead>
                            <!-- thead Ends -->
                            
                            <!-- tbody Begins -->
                            <tbody>
                                
                                <?php 
                                
                                    $i=0;
      
                                    $get_cats = "select * from categories";
      
                                    $run_cats = mysqli_query($con,$get_cats);
      
                                    while($row_cats = mysqli_fetch_array($run_cats)){
                                        
                                        $cat_id = $row_cats['cat_id'];
                                        
                                        $cat_title = $row_cats['cat_title'];
                                        
                                        $cat_desc = $row_cats['cat_desc'];
                                        
                                        $i++;
                                                                        
                                ?>
                                
                                <!-- tr Begins -->
                                <tr>
                                    <!-- td Begins -->
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cat_title; ?></td>
                                    <td width="300"><?php echo $cat_desc; ?></td>
                                    <td>
                                        <a href="index.php?edit_cat=<?php echo $cat_id; ?>">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?delete_cat=<?php echo $cat_id; ?>">
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