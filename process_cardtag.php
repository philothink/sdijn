<?php
/*
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$sql = "INSERT INTO cardtag_library (`cardnum`, `time`) VALUES('".$_POST['cardnum']."', now())";
$lastid = "SELECT LAST_INSERT_ID()";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/cardtag.php');
?>
