<?php
if(isset($_POST["submit"])){
  //grabbing data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  $email = $_POST["email"];
  //instantiating signup contr class
  include "../classes/dbh.classes.php";
     include "../classes/signup.classes.php";
     include "../classes/signup-contr.classes.php";

     $signup = new SignupContr($uid,$pwd,$pwdRepeat,$email);
  //running error handlers and signup
      $signup->signupUser();
  //going back to front page
  header("Location: ../index.php?error=none");
}