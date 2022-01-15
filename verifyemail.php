<?php 
    session_start();
    include_once "header.php";
    include_once "./php/config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    if(!empty($email)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            ?>
                <div style="color:black;font-size:25px">
                       Email Verified Successfully! <br>
                       Redirecting to Update Page in &ensp; <span style="color:green;font-size:50px" id="countdowntimer"> 3 </span> &ensp; Seconds
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
            header("refresh: 3; url = newpswd.php");     
            }else{
                ?>
                <div style="color:black;font-size:25px">
                       Email does not exist! <br><br>
                       Redirecting in &ensp; <span style="color:red;font-size:50px;" id="countdowntimer">3</span> &ensp;  Seconds
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
            header("refresh: 3; url = enteremail.php");
        }
    }else{
        ?>
        <div style="color:black;font-size:25px">
               All Fields are required! <br>
               Redirecting in &ensp; <span style="color:red;font-size:50px" id="countdowntimer"> 3 </span> &ensp; Seconds
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
        header("refresh: 3; url = enteremail.php");
    }
?>