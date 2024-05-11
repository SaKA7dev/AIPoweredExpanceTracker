<?php
require_once("../controller/user.controller.php");
$METHOD = $_SERVER['REQUEST_METHOD'];
echo $METHOD;
$METHOD==="POST" && Post();
$METHOD==="PUT" && Put();
$METHOD==="GET" && Get();
$METHOD==="DELETE"&& Delete();

?>