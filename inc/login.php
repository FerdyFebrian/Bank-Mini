<?php
@session_start();
include "koneksi.php";
if (@$_SESSION['username'])
{
    if (@$_SESSION['id_userllevel' ]== "Admin") {header("location:../admin/index.php");}
    elseif (@$_SESSION['id_userlevel ']== "Teller") {header("location:../teller/index.php");}
    elseif (@$_SESSION['id_userlevel ']== "CSO") {header("location:../cso/index.php");}
}
?>

    <form method="post">
        <?php
        if (@$_POST["Login"]) {
            include "cek_login.php";
        };
        ?>      
    </form>


    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/stylelogin.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="Username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="Password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"><a href="#">Forgot Password?</a></div>
        <input type="submit" name="Login" value="Sign-in">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>