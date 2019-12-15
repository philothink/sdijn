<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$record_id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "SELECT * FROM goingout WHERE id='".$record_id."'";
$result  = mysqli_query($conn, $sql);
if($result->num_rows == 0){
   echo "없는 게시글입니다.";
} else {
   $sql = "DELETE FROM goingout WHERE `goingout`.`id` = '".$_POST['id']."'";
   $result = mysqli_query($conn, $sql);
   header('Location: http://221.149.205.145/inoutmanage.php');
}
?>
