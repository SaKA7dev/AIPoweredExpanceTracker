<?php
// $conn = mysqli_connect($hostname, $username, $password, $dbname);

// // Check connection
//  if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//  }
//  echo "Connected successfully";

$GLOBALS['db'] = new mysqli("localhost","root","","expancedatabase");
$GLOBALS['db'] = new mysqli("localhost","root","","expancedatabase");
echo "hello";
if($db)
{//
 echo "Database conneted";
}
else{
 echo "Connection faled";
}
?>