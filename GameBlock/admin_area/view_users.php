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
                <i class="fa fa-dashboard"></i> Dashboard / View Users
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
                    <i class="fa fa-users"></i> View Users
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
                                <th width="120">User Name:</th>
                                <th>User Image:</th>
                                <th>User E-mail:</th>
                                <th>User Country:</th>
                                <th>User Job:</th>
                                <th>User Contact:</th>
                                <th>Edit:</th>
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
      
                                $get_users = "select * from admins";
                
                                $run_users = mysqli_query($con,$get_users);
      
                                while($row_users=mysqli_fetch_array($run_users)){
                                    
                                    $user_id = $row_users['admin_id'];
                                    
                                    $user_name = $row_users['admin_name'];
                                    
                                    $user_img = $row_users['admin_image'];
                                    
                                    $user_email = $row_users['admin_email'];
                                    
                                    $user_country = $row_users['admin_country'];
                                    
                                    $user_job = $row_users['admin_job'];
                                    
                                    $user_contact = $row_users['admin_contact'];
                                    
                                    $i++;
                                    
                            ?>
                            
                            <!-- tr Begins -->
                            <tr>
                                <!-- td Begins -->
                                <td><?php echo $i; ?></td>
                                <td><?php echo $user_name; ?></td>
                                <td><img src="admin_images/<?php echo $user_img; ?>" width="60" height="60"></td>
                                <td><?php echo $user_email; ?></td>
                                <td><?php echo $user_country; ?></td>
                                <td><?php echo $user_job; ?></td>
                                <td><?php echo $user_contact; ?></td>
                                
                                <td>
                                    <a href="index.php?user_profile=<?php echo $user_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_user=<?php echo $user_id; ?>">
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