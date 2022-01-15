<?php
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
}
?>


<?php include_once "header.php" ?>
<body class="container">
  <div class="wrapper">
    <section class="form signup">
      <header>Register to Chat App</header>
      <form action="#">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname"  placeholder="First Name" required onkeypress="return allowOnlyLetters(event,this);" / >
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname"  placeholder="Last Name" required onkeypress="return allowOnlyLetters(event,this);" / >
          </div>
          </div>
          <div class="field input">
            <label>Email Adress</label>
            <input type="text" name="email" placeholder="Enter your Email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" required>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Continue to Chat">
          </div>
      </form>
      <div class="link">Already Member ? <a href="login.php">Login Here</a></div>
      <div class="link"><a href="index.html">GO TO HOME</a></div>
    </section>
  </div>

<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/signup.js"></script>

<script language="Javascript" type="text/javascript">    
    
function allowOnlyLetters(e, t)   
{    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
   else { return true; }    
   if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) 
       return true;    
   else  
   {    
      alert("Please enter only alphabets");    
      return false;    
   }           
}      
</script> 

</body>
</html>
