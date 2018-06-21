<?php ob_start();
session_start();
error_reporting(0); 
 ?>
<!DOCTYPE html>
<html >
<head>
  <?php include"include/config.php" ?>
  <meta charset="UTF-8">
  <title>recover</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="signup/css/style.css">

  
</head>

<body>
      <div class="form">

     



      <div id="login">   
      <h1>Recover your password here!!</h1>

      <form action="" method="post">

      <div class="field-wrap">
      <label>
      Username<span class="req">*</span>
      </label>
      <input type="text"required autocomplete="off" name="userrec"/>
      </div>

      <div class="field-wrap">
      <label>
      New password<span class="req">*</span>
      </label>
      <input type="password" name="newpass" required autocomplete="off" />
      </div>

      <div class="field-wrap">
      <label>
      Confirm password<span class="req">*</span>
      </label>
      <input type="password" name="confirm" required autocomplete="off" />
      </div>
   

    <button type="submit" name="recover"  class="button button-block" /><a href=""><font color=white>Recover</font></a></button></form>

<?php 
if(isset($_POST['recover']))
{

    $confirm=$_POST['confirm'];
    $newpass=$_POST['newpass']; 
    $userrec=$_POST['userrec']; 

    if ($confirm==$newpass){
    $updater="UPDATE `userdata` SET `password`='$newpass' WHERE  `username`='$userrec'";
    $recouser=mysqli_query($conn,$updater);
    $recoarr=mysqli_fetch_array($recouser);
    echo "<font color=white>Your password has been updated</font>";

}

    if ($confirm!=$newpass) {
      echo "<font color=white>passwords didn't match</font>";
    }




   
              
    } 

    ?>

  </form>

</div>

</div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="signup/js/index.js"></script>

</body>
</html>
