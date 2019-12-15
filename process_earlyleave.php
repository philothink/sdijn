<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$sql = "INSERT INTO earlyout (seatnum, name, reason, start) VALUES('".$_POST['seatnum']."', '".$_POST['name']."', '".$_POST['reason']."', '".$_POST['start']."')";
$result = mysqli_query($conn, $sql);
header('Location: http://221.149.205.145/inoutmanage.php');



/*
$seatnum = mysqli_real_escape_string($conn, $_POST['seatnum']);
$sql = "SELECT * FROM earlyout WHERE seatnum='".$seatnum."'";
$result  = mysqli_query($conn, $sql);

if($result->num_rows == 0){
  $sql = "INSERT INTO earlyout (seatnum, name, date) VALUES('".$_POST['seatnum']."', '".$_POST['name']."''".$_POST['date']."')";
  mysqli_query($conn, $sql);
  $user_id = mysqli_insert_id($conn);
} else {
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
}
*/

?>
