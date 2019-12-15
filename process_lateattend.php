<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$sql = "INSERT INTO lateattend (seatnum, name, reason, start) VALUES('".$_POST['seatnum']."', '".$_POST['name']."', '".$_POST['reason']."', '".$_POST['start']."')";
$result = mysqli_query($conn, $sql);
header('Location: http://221.149.205.145/inoutmanage.php');
?>
