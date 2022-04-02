<?php
if(isset($_POST['send'])){
$ip=$_SERVER['REMOTE_ADDR'];
$urlname=$_POST['urlname'];
$url=$_POST['url'];
$sql= "INSERT INTO  users(ip ,urlname, url)"
    ."VALUES ('$ip', '$urlname', '$url')";
mysqli_query($connect, $sql);
}
?>

