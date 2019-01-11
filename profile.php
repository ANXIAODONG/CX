<?php
session_start();
header("Access-Control-Allow-Origin: http://10.30.29.52:63341");
header("Access-Control-Allow-Credentials: true");


if(isset($_SESSION['name'])){
    $data=array('userName'=> $_SESSION['name']);
    $data["message"]="success";
}else{
    $data["message"]="error";
}
//cdxcdxcdx
echo json_encode($data);

?>
