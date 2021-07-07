<?php
 include 'include/config.php';
 include"sidebar.php" ;


    $user=$_SESSION['username'];
    $selectp="SELECT * FROM `post` WHERE `username`='$user'";
    $e=mysqli_query($conn,$selectp);
    $post=mysqli_fetch_array($e);
                              

   //fetching comment data.....
    $user=$_SESSION['username'];
    $selectcomm="SELECT * FROM `comment` WHERE `username`='$user'";
    $ecomm=mysqli_query($conn,$selectcomm);
   
                                      ?>


<div class="chat-window-container"></div>
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
         <?php include "bar.php"; ?>
         <!-- /.navbar-collapse -->
      </div>
   </nav>
   <div class="container-fluid">
      <?php include"coverphoto.php" ?>
      <div class="timeline row" data-toggle="gridalicious">
         <div class="timeline-block">
            <div class="panel panel-default share">

               <div class="panel-heading panel-heading-gray title">
                  What&acute;s new
               </div>
                
                 <form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">

                             
                  <div class="panel-body">
                     <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
                  </div>
                  <div class="panel-body">
                     <textarea name="desc" class="form-control share-text" rows="10" placeholder="Description..."></textarea>
                  </div>
                  <div class="panel-footer share-buttons">
                     <a href="#">
                     <i class="fa fa-photo"></i>
                     </a>
                     <a href="#">
                     <i class="fa fa-video-camera"></i>
                     </a>
                     <div class="col-sm-9">
                        <input type="file" class="form-control" id="inputEmail3" name="postr" placeholder="Type here..">
                     </div>
                     <button type="post" name="posts" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                  </div>
            </div>
         </div>
         </form> <?php if (!empty($d['status'])) {
            while ($d=mysqli_fetch_array($ex)) {
         ?>
         <div class="timeline-block">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <div class="media">
                     <a href="" class="pull-left">
                     <img src="<?php 
                                    if (empty($data['dp'])) {
                                                 $gen=$data['gender'];
                             if ($gen=="male") {
                                echo "images/people/110/mprofile.jpg" ;
                                 # code...
                             }
                           else{
                            echo"images/people/110/fprofile.jpg";
                             }
                                 } else{

                                  echo $data['dp'];
                                       }?>" class="mymedia">
                     </a>
                     <div class="media-body">
                        <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                        <a href=""><?php echo $_SESSION['username']; ?></a>
                        <span>on <?php echo $d['date'] ;?></span>
                     </div>
                  </div>
               </div>
               <div class="panel-body">
                  <div class="boxed">
                     <a href="#" class="h4 margin-none">  <?php echo $d['status']; ?></a>
                     <div class="rating text-left">
                        <span class="star filled"></span>
                        <span class="star filled"></span>
                        <span class="star filled"></span>
                        <span class="star filled"></span>
                        <span class="star filled"></span>
                     </div>
                     <div class="media">
                        <a href="#" class="media-object pull-left">
                        <img src="<?php echo $d['file'];  ?>"  class="media-object mypost" width="100px" />
                        </a>
                        <div class="media-body">
                           <p><?php echo $d['description'];  ?></p>
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
               <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> </a></div>
               <ul class="comments">

                 <?php if (!empty($postcomm['comment'])) {
            while ($postcomm=mysqli_fetch_array($ecomm)) {
         ?>

                  <li>
                     <div class="media">
                        <a href="" class="pull-left">
                        <img src="images/people/50/guy-5.jpg" class="media-object">
                        </a>
                        <div class="media-body">
                           <a href="" class="comment-author">Bill D.</a>
                           <span>Hi Mary, Nice Party</span>
                           <div class="comment-date">21st September</div>
                        </div>
                     </div>
                  </li>
                 <?php }} ?>
                 
      <form action="" method="post">
                  <li class="comment-form">
                     <div class="input-group">
                        <input type="text" class="form-control" />
                        <span class="input-group-addon">
                        <button class="btn btn-primary btn-sm" type="submit" name=comment>comment</button></i></a>
                        </span>
                     </div>
                  </li>
                  </form>

<?php 
if(isset($_POST['comment']))
{

  $comment=$_POST['comment'];
  
  

   
                                   



   
    } 

    ?>



               </ul>
            </div>
         </div><?php } } ?>
      </div>
   </div>
   <?php include"footer.php" ?>
</div>
<!-- Vendor Scripts Bundle -->
</body>
</html>

<?php
   $date= date("Y/m/d");
   
   $time= date("h:i:sa");
   
   if (isset($_POST['posts'])) {
        $status=$_POST['status'];
    $desc=$_POST['desc'];
   
     //$insertp="INSERT INTO `post`( `status`,`username`, `time`,`date`) VALUES ('$status','$user','$time','$date') ";
   
     
      
        $name=$_FILES['postr']['name'];
        $type=$_FILES['postr']['type'];
        $size=$_FILES['postr']['size'];
        $tmp_name=$_FILES['postr']['tmp_name'];
        $destinationp="images/postr/".time().$name;
   
        if ($type=="image/png" || $type=="image/jpeg" || $type=="video/mp4") {
   
            //move_uploaded_file($tmp_name, $destinationp);
            //$insertp="INSERT INTO `post`( `file`) VALUES ('$destinationp' ) ";
   
            move_uploaded_file($tmp_name, $destinationp);
            $insertp="INSERT INTO `post`( `file`,`status`,`username`, `time`,`date`,`description`) VALUES ('$destinationp','$status','$user','$time','$date','$desc') ";
            mysqli_query($conn,$insertp);
   
   
        }
   
    }
    
            
   
            
   
   
   
   ?>
 <button type="post" name="add" class="btn btn-primary"><i class="fa fa-plus"></i>Add Friend</button>