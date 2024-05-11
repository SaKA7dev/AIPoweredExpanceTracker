<?php
require_once("../db.php");
function Post()
{
  if(count($_POST)===3)
  {
  $db= $GLOBALS['db'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $sql= "insert into register (username,password,email) 
  values('$username','$password','$email')";
 $db->query($sql);
 http_response_code(200);
 $result = array("message"=>"Data inserted");
 echo json_encode($result);
  }
  else 
  {
    http_response_code(405);
  $result = array("message"=>"inserted failed");
  echo json_encode($result);
  }
  echo "Post Request";
  exit;
}
function Get()
{
  $db = $GLOBALS['db'];
  $sql = "select * from employee";
  $response = $db->query($sql);
  $alldata = [];
  while($data = $response->fetch_assoc())
  {
    array_push($alldata,$data);
  }
  if(count($alldata)>0)
  {
      http_response_code(200);
      echo json_encode($alldata);
  }
  else{

    http_response_code(400);
    $result = array("message"=>"Data Not found");

    echo json_encode($result);
  }

  echo "Get Request";
  exit;

}
function Put()
{
  $db = $GLOBALS['db'];
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
  $data = file_get_contents("php://input");
  parse_str($data,$finaldata);
  print_r($finaldata);
  $sql = "update employee set";
  foreach($finaldata as $key=>$value)
  {
    $sql .=$key.'='.$value."',";
  }
  $sql=substr_replace($sql,"",-1);
  $sql .="where id = '$id'";
  echo $sql;
    $db->query($sql);
    http_response_code(200);
    $temp = array("message"=>"Update success");
    echo json_encode($temp);
  }
  else{

    http_response_code(400);
    $temp = array("message"=>"Id is missing");
    echo json_encode($temp);
  }
  echo "Put Request";
  exit;
}
function Delete()
{
  $db = $GLOBALS['db'];
if(isset($_GET['id']))
{
     $id = $_GET['id'];
     $sql = "delete from employee where id ='$id'";
     $db->query($sql);
     http_response_code(200);
     $result = array("message"=>"data deleted");
     echo json_encode($result);
}
else{
  http_response_code(404);
     $result = array("message"=>"Id is Missing");
     echo json_encode($result);
}
  echo "Delete Request";
  exit;
}
?>