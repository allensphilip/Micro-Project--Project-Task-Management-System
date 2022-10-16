<?php
require "dbcon.php";

if(isset($_POST['submit'])){

    $uname = $_POST["email"];
    $password = sha1($_POST["password"]);

    if ($email != "" && $password != ""){

        $sqlq="select count(*) as rno from tbl_login where log-email='$email' and log_pass='$password'";
        $result = mysqli_query($conn,$sqlq);
        $row = mysqli_fetch_array($result);

        $count = $row['rno'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}