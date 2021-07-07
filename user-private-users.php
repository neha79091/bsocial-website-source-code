<?php include"sidebar.php" ;
 error_reporting(0); 
?>
 
    <?php 
   //fetching post....
    $selectf="SELECT * FROM `post` WHERE `username`='$user'";
    $f=mysqli_query($conn,$selectf);
    $friend=mysqli_fetch_array($f);
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
                <form class="form-inline"  role="form" method="post" action="" >
                    <label>Search Friends:</label>
                    
                    <div id="users-filter-trigger">
                        
                        <div class="search-name ">
                            <input type="text" class="form-control" name="userfirst" placeholder="First Last Name" id="fname" />
                            <a href="#" class="btn btn-primary btn-sm hidden" id="user-search-name"><i class="fa fa-search"></i> Search</a>
                            
                            <button class="btn btn-primary" type="submit" name="search">Search</button>
                        </div>
                    </div>
                </form>
            </div>

               
                   




           <div class="timeline row" data-toggle="gridalicious">
           <?php 
           //for searching friends.....
           if (isset($_POST['search'])) {
        $fname=$_POST['userfirst'];

        $qifriend="SELECT * FROM `userdata` WHERE `username` like '%$fname%'
        ";
        $li=mysqli_query($conn,$qifriend);
       
        
        }
            while ($like=mysqli_fetch_array($li)) {
         ?>

         
             <form class="form-inline"  role="form" method="post" action="" >
            <div class="timeline-block">
            <div class="panel panel-default user-box">
            <div class="panel-body">
            <div class="media">
            <img src="images/people/110/bso.png" alt="people"<?php //echo $like['dp']; ?> class="media-object img-circle pull-left" />
            <div class="media-body">
            
            <a href="" type="post"  class="username" ><?php echo $like['username'] ;

            ?>
                
            </a>

            </div>
            </div>
            </div>

            <div class="panel-footer">
            
            <button type="submit" name="add" class="btn btn-primary"><i class="fa fa-plus" ></i><a target="_blank" href="user-private-friend.php?id=<?php echo $like['id']; ?>"><font color=white> Add Friend</font></a></button>
           


            <?php ?>
            </div>
            </div>
            </div><?php  } ?>
            </form>
            



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



