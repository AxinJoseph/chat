<?php include_once "header.php" ?>
<body class="container">
<div class="wrapper">
    <section class="form login">
      <header>Verify Email</header>
      <form action="verifyemail.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" >
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Verify Email">
        </div>
      </form>
      <div class="link">Not Registered Yet? <a href="registerpage.php"> Register Here</a></div>
      <div class="link"><a href="index.html">GO TO HOME</a></div>
    </section>
  </div>s 
  <script src="javascript/pass-show-hide.js"></script>
</body>
</html>