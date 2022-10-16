<?php
    require 'dbcon.php';

    if(isset($_POST['submit'])) {
        
        $eml = $_POST["email"];
        $passw = $_POST["password"];
        $hash= sha1($passw);
        // echo "lev1";
        // echo $eml;
        // echo $passw;
        // echo $hash;
        
 $sql2="SELECT * FROM `tbl_login` WHERE `log_email`='$eml' AND `log_pass`='$hash'";
        $result=mysqli_query($conn, $sql2);
        $res=mysqli_fetch_array($result);
        // echo "lev2";
        // echo $res['log_id'];
        // echo $res['log_pass'];
        // echo $res['log_email'];

        if($res['log_pass'] != $hash){
            echo "Invalid user";
            //header("Location: login.php");

        }else{
            // if($res['log_pass'] != $hash){
            //     $msg='pass error';
            //     echo "<script> console.log($msg)</script>";
            // }else{
                //
            
                $_SESSION['email'] = $res['log_email'];
                echo 'Logged in';
                $_SESSION['user_id'] = $res['log_id'];
                $loc='dash/dashboard.php';
                header("Location:  $loc");
            // }
            
        }
    }  
?>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#Id1" aria-controls="Id1">Enable both scrolling & backdrop</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="Id1" aria-labelledby="Enable both scrolling & backdrop">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="Enable both scrolling & backdrop">Backdrop with scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>