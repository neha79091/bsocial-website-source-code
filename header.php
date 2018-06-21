<?php 
ob_start();
session_start();
include 'include/config.php';

if (!isset($_SESSION['username'])) {
   header("location:index.php");
}
?>

        
        <?php
        //fetching userdata... 
        $user=$_SESSION['username'];
        $select="SELECT * FROM `userdata` WHERE `username`='$user'";
        $exe=mysqli_query($conn,$select);
        $data=mysqli_fetch_array($exe);
                            ?>
        
            <?php 
            //fetching post data....
        $selecti="SELECT * FROM `post` WHERE `username`='$user'";
        $ex=mysqli_query($conn,$selecti);
        $d=mysqli_fetch_array($ex);
                     ?>
                                            




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Neha mishra">
    <title>Bsocial <?php echo $data['cover'];  ?></title>

    <!-- App Styling Bundle -->
    <link href="css/default.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" data-toggle="sidebar-menu" id="toggle-sidebar-menu" class="visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">
                    <li><a href="">Bsocial</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Explore <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            
                            
                            <li><a href="user-public-profile.php">About</a>
                            </li>
                            
                            
                            <li><a href="user-private-messages.php">Messages</a>
                            </li>
                            <li><a href="profile.php">Profile</a>
                            </li>
                            <li><a href="user-private-timeline.php">Timeline</a>
                            </li>
                            <li><a href="user-private-users.php">Find Friends</a>
                            </li>
                        </ul>

                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Friend Requests <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                    <?php 
                     //for showing friend requests...
                    $selnot="SELECT * FROM `friends` WHERE `fusername`='$user'";
                    $fnot=mysqli_query($conn,$selnot);

                    while ($frnot=mysqli_fetch_array($fnot)) {
                     if ($frnot['request']=='0') {
                        
                     
                    ?>
                    <?php if (!empty($frnot['fusername'])){ ?>


                    <li class="active"><a href="fprofile.php?iid=<?php echo $frnot['username']; ?>"><?php echo $frnot['username'];?> sent you a friend request</a>
                    </li>
                    <?php }  else{?>

                    <li class="active"><?php echo"No friend request ryt now.."?> 
                    </li>
                    <?php } ?>
                    <?php } }?>
                    </ul>



                    
                    <li data-toggle="tooltip" data-placement="bottom" title="A few Color Examples. Download includes CSS Files for all color examples & the tools to Generate any Color combination. This Color-Switcher is for previewing purposes only.">
                        
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    

                    <!-- User -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user" data-toggle="dropdown">

                                            
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
                    }?>     

                             
                                            ?> " alt="Bill" class="img-circle" width="60" />
                             <?php echo $_SESSION['username']; ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="profile.php">Profile</a>
                            </li>
                            <li><a href="user-private-messages.php">Messages</a>
                            </li>
                            <li><a href="sessiond.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>


            <!-- /.navbar-collapse -->
            </div>
    </div>
