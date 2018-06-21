<?php include"sidebar.php";
  
  ?>

<div id="content">
        <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-ellipsis-h"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php include"bar.php" ?>

                <!-- /.navbar-collapse -->
                </div>
        </nav>
        <div class="container-fluid">
       
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">Edit Profile Photo</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Profile Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="inputEmail3" name="profile" placeholder="Type here..">
                                    </div>

                                   
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" name="submitp" class="btn btn-primary">change</button>
                                    </div>
                                </div>
                            </form>

                              <div class="panel-heading panel-heading-gray">Edit Cover Photo</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Cover Photo</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="inputEmail3" name="cover" placeholder="Type here..">
                                    </div>

                                   
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" name=c class="btn btn-primary">change</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <!--Friends -->
                   
                </div>
            </div>
            
        </div>

<!-- Footer -->
<?php include"footer.php" ?>
</body>
</html>
<?php 

       if (isset($_POST['submitp'])) {
            
    
          
          $name=$_FILES['profile']['name'];
            $type=$_FILES['profile']['type'];
            $size=$_FILES['profile']['size'];
            $tmp_name=$_FILES['profile']['tmp_name'];
            $destination="images/profile/".time().$name;

            if ($type=="image/png" || $type=="image/jpeg") {

                move_uploaded_file($tmp_name, $destination);
                $update="UPDATE `userdata` SET `dp`='$destination' WHERE username='$_SESSION[username]'";
                mysqli_query($conn,$update);
            }

        }
        
                

                

      

?>
<?php 

       if (isset($_POST['submit'])) {
        
         $name=$_FILES['cover']['name'];
         $type=$_FILES['cover']['type'];
        $size=$_FILES['cover']['size'];
        $tmp_name=$_FILES['cover']['tmp_name'];
        $destinationc="images/cover/".time().$name;

         if ($type=="image/png" || $type=="image/jpeg") {

            move_uploaded_file($tmp_name, $destinationc);
             $update="UPDATE `userdata` SET `cover`='$destinationc' WHERE `username`='$_SESSION[username]'";
            mysqli_query($conn,$update);
            }

        }
        
                

                

      

?>