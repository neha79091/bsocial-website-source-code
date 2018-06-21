<?php include"sidebar.php";
 
   //fetching user post....
    $selecti="SELECT * FROM `post` WHERE `username`='$user'";
        $exuser=mysqli_query($conn,$selecti);
       



        $selectf="SELECT * FROM `friends` WHERE `username`='$user'";
        $exf=mysqli_query($conn,$selectf);
        $fri=mysqli_fetch_array($exf);

        $friendpost=$fri['fusername'];

         //fetching friends post....
         $selectfp="SELECT * FROM `post` WHERE `username`='$friendpost'";
        $exfp=mysqli_query($conn,$selectfp);

         $selectfpr="SELECT * FROM `userdata` WHERE `username`='$friendpost'";
        $exfpr=mysqli_query($conn,$selectfpr);
        $dfpr=mysqli_fetch_array($exfpr);
         
         
        //....fetching friends comment

         $selectcomf="SELECT * FROM `comment` WHERE `username`='$friendpost'";
        $exfpr=mysqli_query($conn,$selectfpr);
        $dfpr=mysqli_fetch_array($exfpr);
        
              
        
   
   

                                     ?>
    
    <div class="sidebar right">
        <div class="chat-search">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
       
       
    </div>
    
   
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
        <?php include"coverphoto.php" ?>
            <div class="row">
                <div class="col-md-9">
                    <ul class="timeline-list">
                    <?php while ( $duser=mysqli_fetch_array($exuser)) {
                          //....fetching my comment.....
         $selectcomm="SELECT * FROM `comment` WHERE `user2`='$user'";
        $exfpr=mysqli_query($conn,$selectfpr);
        $dfpr=mysqli_fetch_array($exfpr);

    # code...
?>
            <li class="media" id="october">
                <div class="pull-left"><div class="date"><?php echo$duser['username'] ?></div>
                    <img src="<?php echo$data['dp'] ?>" alt="people" class="img-circle" width="80" />
                    <div class="date"><?php echo$duser['date'] ?></div>
                </div>




                <div class="media-body">
                    <div class="row">
                        <div class="col-md-10 col-lg-8">
                            <div class="panel panel-default relative">
                                <img src="<?php echo$duser['file'] ?>" alt="place" class="img-responsive">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

           </li>

           <li class="media">

<div class="media-body">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="boxed">
                <a href="#" class="h4 margin-none"><?php echo$duser['status'] ?></a>
                <div class="rating text-left">
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                </div>
                <div class="media">
                    
                    <div class="media-body">
                        <p><?php echo$duser['description'] ?></p>
                    </div>
                </div>
                 <div class="rating text-left">
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                </div>
                
            </div>
        </div>
       
     
      </form>


   <?php 
    $cpost1=$duser['file'];
      $comuser=$duser['description'];

?>  


        <?php $frcomm1=$duser['username'];  
        ?>
    </div>
</div>
</li>
            <?php } ?>

<?php while ($fp=mysqli_fetch_array($exfp)) {
# code...
?>




                <li class="media" id="october">
                <div class="pull-left"> <div class="date"><?php echo$fp['username'] ?></div>
                    <img src="<?php echo$dfpr['dp'] ?>" alt="people" class="img-circle" width="80" />
                    <div class="date"><?php echo$fp['date'] ?></div>
                </div>




                <div class="media-body">
                    <div class="row">
                        <div class="col-md-10 col-lg-8">
                            <div class="panel panel-default relative">
                                <img src="<?php echo$fp['file'] ?>" alt="place" class="img-responsive">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <li class="media">

<div class="media-body">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="boxed">
                <a href="#" class="h4 margin-none"><?php echo$fp['status'] ?></a>
                <div class="rating text-left">
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                </div>
                <div class="media">
                    
                    <div class="media-body">
                        <p><?php echo$fp['description'] ?></p>
                    </div>
                </div>
                 <div class="rating text-left">
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                </div>
                
            </div>
        </div>
        <form action="" method="post">
     
      </form>
      <?php
      $cpost=$fp['file'] ;   
      $frcomm=$fp['username'];   ?>
        <ul class="comments">
           
           
            
           
        </ul>
    </div>
</div>
</li>

           </li>
            <?php } ?>


                    </div>
                </div>
            </li>
        </ul>
    </div>
    
</div>
</div>

<!-- Footer -->
<?php include"footer.php" ?>
</body>
</html>
<?php 

if(isset($_POST['comment']))
{
  $comm=$_POST['comm'];
  




  


 $insert_comment="INSERT INTO `comment`( `username`, `user2`, `comment`,`cpost`) VALUES ('$user','$frcomm' ,'$comm','$cpost')";
 

 
          mysqli_query($conn,$insert_comment);
          
         
}


if(isset($_POST['comment1']))
{
  $comm1=$_POST['comm1'];
  




  


 $insert_comment1="INSERT INTO `comment`( `username`, `user2`, `comment`,`cpost`) VALUES ('$user','$frcomm1' ,'$comm1','$cpost1')";
 

 
          mysqli_query($conn,$insert_comment1);
          
         
}


 ?>