<?php
       $fnameError="";
       $usernameError="";
       $emailError="";
       $passError="";
       $cpassError="";
       $phnumberError="";
      if(isset($_POST['submitButton'])) {
      
      $username=$_POST['usernameValue'];
      $email=$_POST['emailValue'];
      $fullname=$_POST['fnameValue'];
      $password=$_POST['passValue'];
      $cpassword=$_POST['cpassValue'];
      $phone=$_POST['phnumberValue'];

        if(empty($fullname)) {
         $fnameError= "Full name must be filled";
        }
        if(empty($username)) {
            $usernameError= "Username must be filled";
           }
        if(empty($phone)) {
            $phnumberError= "Phone number must be filled";
           }
        if(empty($email)) {
            $emailError= "Email must be filled";
           }
        if(empty($password)) {
            $passError= "Password must be filled";
           }
        if(empty($cpassword)) {
            $cpassError= "Password must be confirmed";
           }
        if(preg_match("/^[0]\d{9}$/",$phone)==0 && empty($phone)==FALSE){
            $phnumberError="Phone number not valid";
        }
        if(preg_match("/\w@emsi\.ma{1}$/",$email) == 0 && empty($email)==FALSE) {
            $emailError = "Email not valid";
           }
       if(preg_match("/^[A-Za-z]+(?:\s+[A-Za-z]+)+$/",$fullname)==0 && empty($fullname)==FALSE){
        $fnameError = "Full name not valid";
       }
       if(preg_match("/^.{8,12}$/",$password)==0 && empty($password)==FALSE){
        $passError="Password not valid";
       }
       if($password != $cpassword && empty($cpassword)==FALSE){
        $cpassError="Password is not identical";
       }
       
      }
    ?>