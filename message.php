<?php include"sidebar.php" ;
 error_reporting(0); 
$idm=$_GET['idm'];
$selectidm="select * from `message` where `username`='$idm'";
$exeidm=mysqli_query($conn,$selectidm);


$selnot="SELECT * FROM `friends` WHERE `fusername`='$user' ";
$fnot=mysqli_query($conn,$selnot);

$selmes="SELECT * FROM `friends` WHERE `username`='$idm'";
$fmes=mysqli_query($conn,$selmes);
$frmes=mysqli_fetch_array($fmes);

//fetching message details of user.......
$selmess="SELECT * FROM `message` WHERE `username`='$idm' AND `fusername`='$user' order by day,fusertime";
$fmess=mysqli_query($conn,$selmess);
$to=mysqli_fetch_all($fmess,MYSQLI_ASSOC);//bheje
//$frmess=mysqli_fetch_array($fmess);

//fetching message details of friend user.......
$selmessage="SELECT * FROM `message` WHERE `username`='$user' AND `fusername`='$idm'";
$fmessage=mysqli_query($conn,$selmessage);
$from=mysqli_fetch_all($fmessage,MYSQLI_ASSOC);;//aye

$all=array_merge($to,$from);



$ids = array();
foreach ($all as $key => $row)
{
    $ids[$key] = $row['id'];
}
array_multisort($ids, SORT_DESC, $all);

// print_r($all);


//$frmessage=mysqli_fetch_array($fmessage);
$usermessage=$frmes['username'];
$fusermessage=$frmes['fusername'];
?>
    
    <div class="sidebar right">
        <div class="chat-search">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
       
        <ul class="chat-contacts">
            
           
            
            
        </ul>
    </div>
    <script id="chat-window-template" type="text/x-handlebars-template">
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
                <a href="#" class="close"><i class="fa fa-times"></i></a>
                <a href="#">
                    <img src="{{ user_image }}" width="40" class="pull-left">
                    <span class="contact-name">{{user}}</span>
                </a>
            </div>
            
            <input type="text" class="form-control" placeholder="Type message..." />
        </div>
    </script>
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
                <?php include"bar.php" ?>

                <!-- /.navbar-collapse -->
                </div>
        </nav>
        <div class="container-fluid">
            <div class="media messages-container">
                <div class="messages-list pull-left">
                    <div class="panel panel-default">
                    <?php while ($frnot=mysqli_fetch_array($fnot)) {
                              //selecting whom to message.....
                        ?>
        <ul class="list-group">
            <li class="list-group-item ">
                <a href="#">
                    <div class="media">
                        <div class="media-object pull-left">
                            <img src="images/people/110/win.jpg" width="50" alt="" />
                        </div>
                        
                        <div class="media-body">
                            <span class="date">Today</span>
                            <span class="user"><?php echo$frnot['username'] ?></span>
                            <div class="message"></div>
                        </div><form action="" method="post">
                     <li class="active"><button class="btn btn-regular btn-xs" type="" name=message><a target="_blank" href="message.php?idm=<?php echo $frnot['username']; ?>">Start Messaging</a></button>
                     <?php //selecting whom to message...... ?>
                    </div></li></form>

                    
   
                  
                </a>
            </li>
            
        </ul><?php   }?>
                    </div>
                </div>
                
                <div class="media-body">
                    <div class="panel panel-default share">
                    <form action="" method="post">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary" name="message" >
                                    <i class="fa fa-envelope"></i> Send
                                </button>
                            </div>

                            <input type="text" name="fusermessage" class="form-control share-text" placeholder="Write message..." />
                        </div></form>
                            
    <?php if(isset($_POST['message']))

    {

   $mdate= date("Y/m/d");  
   $mtime= date("h:i:sa");
   $fmessage=$_POST['fusermessage'];
  
   $insertmessage="INSERT INTO `message`( `username`, `fusername`, `fusermessage`,`fusertime`, `day`) VALUES ('$usermessage','$user','$fmessage','$mtime','$mdate')";
   mysqli_query($conn,$insertmessage);
     
    }
    ?>
                        <!-- /input-group -->
                        </div>
<?php foreach ($all as $key => $frmess) {
    ?>
    <div class="media">
        
        <div class="media-body message">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-white">
                    <div class="pull-right">
                        <small class="text-muted"> <?php  echo $frmess['fusertime'];
                         ?>
                            on
                         <?php   echo$frmess['day']; ?></small>
                    </div>
                    <a href="#"><?php echo$frmess['fusername']; ?></a>
                </div>
                <div class="panel-body">
                   <?php       echo$frmess['fusermessage'] ; ?>
                </div>
            </div>
        </div>
    </div><?php } ?>
    
    
</div>
</div>
</div>

      <?php include "footer.php" ?>
</body>
</html>