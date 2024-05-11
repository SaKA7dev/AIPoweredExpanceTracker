<?php
$nameError="";
$passwordError="";
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
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
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>

    <html lang="en">
      <head>
        <meta charset="UTF-8" />

        <title>AI Expense Tracker &amp;</title>

        <link rel="stylesheet" href="style.css" />
      </head>

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

          <form action="dashboard.php" Method ="POST">

          <div class="signin">
            <div class="content">
              <h2>User Login</h2>
    
              <div class="form">
                <div class="inputBox">
                  <input type="text" name="username" required /> <i>Username</i>
                  <p><?php echo $nameError?></p>
                </div>

                <div class="inputBox">
                  <input type="password" name="password" required /> <i>Password</i>
                  <p<?php echo $passwordError?></p>
                </div>

                <div class="links">
                  <a href="#">Forgot Password</a> <a href="#">Signup</a>
                </div>

                <div class="inputBox">
                  <input name ="submit" type="submit" value="Login" />
                </div>
              </div>
            </div>
          </div>


          </form>
        
        </section>
        <!-- partial -->
      </body>
    </html>
    <!-- partial -->
  </body>
</html>
