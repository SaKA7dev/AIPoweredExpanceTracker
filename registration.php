
<?php
$nameError="";
$passwordError="";
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password=$_POST['email'];
  if(empty($username))
  {
    $nameError="<br>Name is required";
  }
  else
  {
    $username =trim($username);
    $username = htmlspecialchars($username);
    if(!preg_match("/^[a-zA-z]+$/",$username))
    {
      $nameError="'<br>'name should contain onlly char and space";
    }
  }
  if(empty($password))
  {
    $passwordError="<br>Password is required";
  }else
  {
      if(strlen($password)<=8)
      {
        $passwordError="<br> At least 8 digits";
      }
      elseif(!preg_match("#[0-9]+#",$password))
      {
        $passwordError="<br> At least One digit";
      }
      elseif(!preg_match("#[a-z]+#",$password))
      {
        $passwordError="<br> At least one small char";
      }
      elseif(!preg_match("#[A-Z]+#",$password))
      {
        $passwordError="<br/> at least one uppercase";
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <title>AI Expense Tracker &amp;</title>
  </head>
  <body>
    <body>
      <!-- partial:index.partial.html -->

      <section>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>
        <span></span> <span></span> <span></span> <span></span> <span></span>

        <div class="signin">
          <div class="content">
            <h2>User Registration</h2>

            <div class="form">
              <div class="inputBox">
                <input type="text" name="username" required /> <i>Username</i>
              </div>

              <div class="inputBox">
                <input type="password" required /> <i>Password</i>
              </div>
              
              <div class="inputBox">
                <input type="email" name="email" required /> <i>Email Address</i>
              </div>

              <div class="links">
                <a href="#">Forgot Password</a> <a href="#">Signup</a>
              </div>

              <div class="inputBox">
                <input type="submit" value="Login" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- partial -->
    </body>
  </body>
</html>
