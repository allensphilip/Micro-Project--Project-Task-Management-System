<?php
    require 'dbcon.php';

    $eml='asptvr.work@gmail.com';
    $pas= '1212';
    $hash= sha1($pas);
    //$hashedpassword = sha1($pas);
    echo $hash;
    // $sql2 ="INSERT INTO `login`(`username`, `pass`, `email`) VALUES ('allen','$hash','$eml')";
    $sql2="INSERT INTO `tbl_login`(`log_email`, `log_pass`) VALUES ('$eml','$hash')";
//     $sql2="SELECT * FROM login WHERE pass='$hash' ";
    $result=mysqli_query($conn, $sql2);
//     print_r($result);
//     $res=mysqli_fetch_array($result);
//     echo $res['pass'];
//     echo $res['email'];
//     echo $res['username'];
// ?>



<!-- $sql2="SELECT * FROM login WHERE email='$eml' and pass='$hash' ";
    $result=mysqli_query($conn, $sql2);
    print_r($result);
    $res=mysqli_fetch_array($result);
    echo $res['pass'];
    echo $res['email'];
    echo $res['username']; -->