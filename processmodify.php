<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$sql = "SELECT * FROM user WHERE name='".$author."'";
$result  = mysqli_query($conn, $sql);
if($result->num_rows == 0){
   echo "없는 ID입니다.";
} else {
   $sql = "UPDATE user SET password = '".$_POST['password']."' WHERE `user`.`name` = '".$_POST['author']."'";
$result = mysqli_query($conn, $sql);
header('Location: http://221.149.205.145/inoutmanage.php');
}
?>
