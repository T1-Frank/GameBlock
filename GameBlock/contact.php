<?php 
    
    $active='Contact';
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
                        Contact Us
                    </li>
                    <!-- BreadCrumb li Ends -->
                </ul>
                <!-- Bootstrap BreadCrumb Ends -->
            </div>
            <!-- Bootstrap Column md-12 Ends -->
            
            <!-- Bootstrap Column md-3 Begins -->
            <div class="col-md-3">
                <!-- Include Sidebar.php -->
                <?php 
                    
                    include("includes/sidebar.php");
                
                ?>
                <!-- Include Sidebar.php /-->
            </div>
            <!-- Bootstrap Column md-3 Ends -->
                
            <!-- Bootstrap Column md-9 Begins -->
            <div class="col-md-9">
                <!-- Box Begins -->
                <div class="box">
                    <!-- Box Header Begin -->
                    <div class="box-header">
                        <!-- Center -->
                        <center>
                            <h2>Feel Free To Contact Us</h2>
                            
                            <p class="text-muted">
                                If you have any Questions, feel free to ask us. Our Customer Service works <strong>24/7</strong>
                            </p>
                        </center>
                        <!-- Center /-->
                        
                        <!-- Form Begin -->
                        <form action="contact.php" method="post">
                            <!-- Bootstrap Form Group Begin -->
                            <div class="form-group">
                                
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            <div class="form-group">
                                
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            <div class="form-group">
                                
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            <div class="form-group">
                                
                                <label>Message</label>
                                <textarea name="message" class="form-control"></textarea>
                                
                            </div>
                            <!-- Bootstrap Form Group Ends-->
                            
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i>&nbsp;&nbsp;Send Message
                                </button>
                            </div>
                        </form>
                        <!-- Form Ends -->
                        
                        <?php 
                        
                            if(isset($_POST['submit'])){
                                
                                // Message Received by Admin
                                
                                $sender_name = $_POST['name'];
                                
                                $sender_email = $_POST['email'];
                                
                                $sender_subject = $_POST['subject'];
                                
                                $sender_message = $_POST['message'];
                                
                                $receiver_email = "Francois@bookwise.co.za";
                                
                                $headers = "From : ".$sender_email;
                                
                                $txt = " You have Received an e-mail from".$sender_name.".\n\n".$sender_message;
                                
                                mail($receiver_email,$sender_subject,$txt,$headers);
                                
                                //Auto Reply//
                                
                                $email = $_POST['email'];
                                
                                $subject = "Thanks For Contacting";
                                
                                $msg = "Thanks For Sending Us a Message, Our staff will respond as soon as possible ";
                                
                                $from = "FrancoisCloete1995@gmail.com";
                                
                                mail($email,$subject,$msg,$from);
                                
                                echo "
                                
                                    <script>alert('Message Successful')</script>
                                
                                ";
                                
                            }
                        
                        ?>
                        
                    </div>
                    <!-- Box Header Ends -->
                </div>
                <!-- Box Begins -->
            </div>
            <!-- Bootstrap Column md-9 Ends -->
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