<?php ob_start();
session_start();
 error_reporting(0); 
 ?>
<!DOCTYPE html>
<html >
<head>
  <?php include"include/config.php" ?>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="signup/css/style.css">

  
</head>

<body>
      <div class="form">

      <ul class="tab-group">
      <li class="tab active"><a href="#signup">Sign Up</a></li>
      <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
      <div id="signup">   
      <h1>Sign Up for Free</h1>

      <form action="" method="post">

      <div class="top-row">
      <div class="field-wrap">
      <label>
      First Name<span class="req" >*</span>
      </label>
      <input type="text" required autocomplete="off" name="firstname" />
      </div>

      <div class="field-wrap">
      <label>
      Last Name<span class="req" >*</span>
      </label>
      <input type="text"required name="lastname" autocomplete="off"/>
      </div>
      </div>

      <div class="top-row">
      <div class="field-wrap">
      <label>
      Email<span class="req" >*</span>
      </label>
      <input type="email" name="email" required autocomplete="off" />
      </div>

      <div class="field-wrap">
      <label>
      Username<span class="req" >*</span>
      </label>
      <input type="text"required name="username" autocomplete="off"/>
      </div>
      </div>


      <div class="top-row">
      <div class="field-wrap">
      <label>
      Password<span class="req" >*</span>
      </label>
      <input type="password" name="pass" required autocomplete="off" />
      </div>

      <div class="field-wrap">
      <label>
      Confirm Password<span class="req" >*</span>
      </label>
      <input type="password"  name="conpass" required autocomplete="off"/>
      </div>
      </div>


          <div class="top-row">
          <div class="field-wrap">
          <label>
          Location<span class="req" >*</span>
          </label>
          <input type="text" name="location" required autocomplete="off" />
          </div>

          <div class="field-wrap">
          <label>
          Phone no.<span class="req" >*</span>
          </label>
          <input type="Phone" name="phone" required autocomplete="off"/>
          </div>
          </div>

        <div class="top-row">
          <div class="field-wrap">
           <select name="secquestion" class="form-control" id="sel" required="" style="
           height: 43px;
           width: 250px;
           border: 1px solid #a0b3b0;
           color: #88969b;
           background-color: #15313a;
           font-size: 22px;
           ">
           <option value="" selected="" name="secquestion">Security Question</option>
           <option value="Pets name">What is your pet's name</option>
           <option value="Nationality">What is your nationality</option>
           <option value="Favourite_Teacher">What is your favourite teacher's name</option>
           <option value="Favourite_color">What is your favourite color</option>


          </select>
          </div>

          <div class="field-wrap">
          <label>
          Security Answer<span class="req" >*</span>
          </label>
          <input type="Phone"required name="secanswer" autocomplete="off"/>
          </div>
          </div>




    <div class="top-row">
      <div class="field-wrap">
       <select name="gender" class="form-control" id="sel" required="" style="
       height: 43px;
       width: 250px;
       border: 1px solid #a0b3b0;
       color: #88969b;
       background-color: #15313a;
       font-size: 22px;
       ">
       <option value="" selected="" name="gender">Gender</option>
       <option value="male">male</option>
       <option value="female">female</option>



     </select>
   </div>

   <div class="field-wrap"></label>
    <input type="date" name="dob" class=" form-control" required="" style="
    color: #88969b;
    ">
  </div>
</div>


<button type="submit" class="button button-block" name="register"/>Get Started</button>
<?php  echo "<font color=white>Forgot password?click <a href=recover.php>here</a> to recover</font>";?>
</form>

</div>


<?php 
if(isset($_POST['register']))
{
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['pass'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $location=$_POST['location'];
  $phone=$_POST['phone'];
  $secquestion=mysqli_real_escape_string($conn,$_POST['secquestion']);
  $secanswer=$_POST['secanswer'];
  $uid="besocial-".rand(1,255);
$cpass=$_POST['conpass'];

if($cpass!=$password)
{
  echo "<font color=white>Passwords don't match</font>";
}


if ($password==$cpass) {

  $username=$_POST['username'];
            $password=$_POST['password'];

          $fetch="SELECT  `username` FROM `userdata`"; 
            $exe=mysqli_query($conn,$fetch);
            $usernames=[];
            while($data=mysqli_fetch_array($exe)){
              array_push($usernames, $data['username']);
            }

            //print_r($usernames);

            if (in_array($username, $usernames)) {
             echo "<script>alert('username already taken')</script>";
           }else{
  


 $insert_query="INSERT INTO userdata( `uid`, `username`, `first_name`, `last_name`, `email`, `phone`, `gender`, `dob`, `location`, `securityques`, `securityans`, `password`) VALUES ('$uid','$username','$fname','$lname','$email','$phone','$gender','$dob','$location','$secquestion','$secanswer','$password')";
 $insertlogin="INSERT INTO `login`( `username`, `password`) VALUES ('$username','$password')" ;

 
          mysqli_query($conn,$insert_query);
          mysqli_query($conn,$insertlogin);
          header("location:profile.php");
          $_SESSION['username']=$username;
          $_SESSION['password']=$password;
        }
}}

?>


      <div id="login">   
      <h1>Welcome Back!</h1>

      <form action="" method="post">

      <div class="field-wrap">
      <label>
      Username<span class="req">*</span>
      </label>
      <input type="text"required autocomplete="off" name="username"/>
      </div>

      <div class="field-wrap">
      <label>
      Password<span class="req">*</span>
      </label>
      <input type="password"required autocomplete="off" name="password"/>
      </div>

    <p class="forgot"><a href="recover.php">Forgot Password?</a></p>

    <button class="button button-block" name="login" /><a href=""><font color=white>Log In</font></a></button>

<?php 
if(isset($_POST['login']))
{

  $lusername=$_POST['username'];
  $lpassword=$_POST['password'];

   
    $selectl="SELECT * FROM `userdata` WHERE `username`='$lusername'";
    $luser=mysqli_query($conn,$selectl);
    $luserarr=mysqli_fetch_array($luser);
                                   



   
              
  if ($lpassword==$luserarr['password']) {
    # code...
  
  
   header("location:profile.php");
   $_SESSION['username']=$lusername;
   $_SESSION['password']=$lpassword;
            
} if ($lpassword!=$luserarr['password']){echo"<font color=white>Invalid Username or Password..</font>";} } 

    ?>

  </form>

</div>

</div><!-- tab-content -->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="signup/js/index.js"></script>

</body>
</html>
