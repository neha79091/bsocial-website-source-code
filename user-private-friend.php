<?php include"sidebar.php" ;
$id=$_GET['id'];

 
$select="SELECT * FROM `userdata` WHERE `id`='$id'";
$con=mysqli_query($conn,$select);
$conf=mysqli_fetch_array($con);
?>
   
        <div id="content">
        <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
        <div class="container-fluid">

        <!-- Brand and toggle get grouped for better mobile display -->
        <?php include"bar.php" ?>
        <!-- Collect the nav links, forms, and other content for toggling -->


        <!-- /.navbar-collapse -->
        </div>
        </nav>
         
        <div class="container-fluid">
            <div id="filter">
                
            </div>

            <?php 
         ?> 
                  
                   




           <div class="timeline row" data-toggle="gridalicious">
           

         
             <form class="form-inline"  role="form" method="post" action="" >
            <div class="timeline-block">
            <div class="panel panel-default user-box">
            <div class="panel-body">
            <div class="media">
            <img src="images/people/110/bso.png" alt="people"<?php //echo $like['dp']; ?> class="media-object img-circle pull-left" />
            <div class="media-body">
            
            <a href="" type="post"  class="username"><?php echo $conf['username'];

            ?>
                
            </a>

            </div>
            </div>
            </div>

            <div class="panel-footer">
            
            <button type="submit" name="add" class="btn btn-primary"><i class="fa fa-plus"></i> Send a Friend Request</button>

            <?php ?>
            </div>
            </div>
            </div>
            </form>
            <?php     
            if (isset($_POST['add'])) {
             
              
               
            $qmake="INSERT INTO `friends`(`username`,`fusername`,`request`) VALUES ('$user','$conf[username]','0')
            ";
            mysqli_query($conn,$qmake);

            } ?>



            </div>
            </div>

        <!-- Footer -->
       <div class="footer">
            Social Network Template &copy; Copyright Notice
        </div>

        <!-- // Footer -->
        </div>

    <!-- // Content -->
    
<!-- Vendor Scripts Bundle --><script src="js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="js/scripts.min.js"></script>
</body>
</html>



