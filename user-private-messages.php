<?php include"sidebar.php" ;
$selnot="SELECT * FROM `friends` WHERE `fusername`='$user'";
$fnot=mysqli_query($conn,$selnot);
?>
    
    <div class="sidebar right">
        <div class="chat-search">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
       
        <ul class="chat-contacts">
            <li class="online" data-user-id="1">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Jonathan S.</div>
                            <small>"Free Today"</small>
                        </div>
                    </div>
                </a>
            </li>
           
            
            
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
                              if ($frnot['request']=='1') {
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
                    </div></li></form>

                   
                </a>
            </li>
            
        </ul><?php  } }?>
                    </div>
                </div>
                
                
            </div>
        </div>

      <?php include "footer.php" ?>
</body>
</html>