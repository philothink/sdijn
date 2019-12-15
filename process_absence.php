<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$sql = "INSERT INTO absence (seatnum, name, reason, start, enddate) VALUES('".$_POST['seatnum']."', '".$_POST['name']."', '".$_POST['reason']."', '".$_POST['start']."','".$_POST['enddate']."')";
$result = mysqli_query($conn, $sql);
header('Location: http://221.149.205.145/inoutmanage.php');
?>
