<?php include_once "header.php" ?>
<body class="container">
<div class="wrapper">
    <section class="form login">
      <header>Update Password</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" >
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="text" name="password" placeholder="Enter your password" >        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Update Password">
        </div>
      </form>
      <div class="link">Remember old password? <a href="Login.php">Continue Login</a></div>
      <div class="link"><a href="index.html">GO TO HOME</a></div>
    </section>
  </div>
</body>
</html>

<?php

include_once "./php/config.php";
if(isset($_POST['submit']))
{
    $password = $_POST['password'];
    $email = $_POST['email'];
	
    $password = mysqli_query($conn,"update users set password ='$password' where email='$email'");
	
    if($password)
    {
      ?>
      <div style="background-color:white;color:black;padding:20px;position:relative;">
             Update Successful; <br>
             Redirecting in <span style="color:green;font-size:17px" id="countdowntimer"> 3 </span> Seconds
               <script type="text/javascript">
               var timeleft = 3;
               var downloadTimer = setInterval(function(){
               timeleft--;
               document.getElementById("countdowntimer").textContent = timeleft;
               if(timeleft <= 0)
               clearInterval(downloadTimer);
               },1000);
              </script>
      </div> 
  <?php  
  header("refresh: 3; url = login.php");
    }
    else
    {
        echo "Password not updated";
        header("refresh: 3; url = login.php");
    }    	
}
?>