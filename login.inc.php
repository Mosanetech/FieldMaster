<?php
if(isset($_POST["submit"])){
  //grabbing data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  
  //instantiating signup contr class
  include "../classes/dbh.classes.php";
     include "../classes/login.classes.php";
     include "../classes/login-contr.classes.php";

     $login = new LoginContr($uid,$pwd,$pwdRepeat,$email);
  //running error handlers and signup
      $login->loginUser();
  //going back to front page
  header("Location: ../index.php?error=none");
}