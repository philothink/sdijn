<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$sql = "INSERT INTO goingout (seatnum, name, reason, start, endtime) VALUES('".$_POST['seatnum']."', '".$_POST['name']."', '".$_POST['reason']."', '".$_POST['start']."','".$_POST['endtime']."')";
$result = mysqli_query($conn, $sql);
header('Location: http://221.149.205.145/inoutmanage.php');
?>
