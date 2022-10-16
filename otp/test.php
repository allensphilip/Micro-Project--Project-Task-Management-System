<?php
    require '../dbcon.php';
    

    
        $otp1= $_POST['first']=2;
        $otp2= $_POST['second']=3;
        $otp3= $_POST['third']=4;
        $otp4= $_POST['fourth']=6;
        $otp5= $_POST['fifth']=7;
        $otp6= $_POST['sixth']=5;
        $otp="{$otp1}{$otp2}{$otp3}{$otp4}{$otp5}{$otp6}";
        $otpe= 234676;
        $debug->log($otp,$otpe);
        if($otp == $otpe){
          $_SESSION['eml']=$_SESSION['eml'];
          
          //header('Location: ../home.php');
        }else{
            //set a tree time chance

        }
        
    
?>