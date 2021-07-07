<?php ob_start();
session_start();
 ?>

<?php include 'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Social Network Template</title>

    <!-- App Styling Bundle -->
    <link href="css/default.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <h1>Account Access</h1>
                <div class="panel panel-default text-center">
                    <img src="images/people/110/guy-5.jpg" class="img-circle">
                    <div class="panel-body">
                        
                      <form action="" method="post">
                        <input class="form-control" required autocomplete="off" name="username" placeholder="Username"/>
                        
                        <input class="form-control" type="password"  required autocomplete="" name="password" placeholder="Enter Password"/>


                        

                        <button type="submit"  class="btn btn-primary" name="login">Login <i class="fa fa-fw fa-unlock-alt"></i></button>
                        <a href="#" class="forgot-password">Forgot password?</a>
                         </form>

                        <?php 
if(isset($_POST['login']))
{
  
  $lusername=$_POST['username'];
  $lpassword=$_POST['password'];
   header("location:profile.php");
   $_SESSION['username']=$lusername;
   $_SESSION['password']=$lpassword;
            
}  
    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Vendor Scripts Bundle -->
<script src="js/vendor.min.js"></script>

<!-- App Scripts Bundle -->
<script src="js/scripts.min.js"></script>
</html>
