<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
date_default_timezone_set('Asia/Seoul');
$today = "'".date('Y-m-d')."'";
$todate = "'".date('Y-m-d 00:00:00')."'";
$now_datetime = "'".date('Y-m-d H:i:s')."'";
$datetime = "'".date('Y-m-d')."'";
$tmdate = "'".date('Y-m-d', strtotime('+1days'))."'";

$queryla_ing = "SELECT * FROM lateattend WHERE start > ".$now_datetime." AND start <".$tmdate."";
$queryla_ed = "SELECT * FROM lateattend WHERE start < ".$now_datetime." AND start > ".$todate."";
$queryab_ing = "SELECT * FROM absence WHERE start <= ".$datetime." AND enddate >= ".$datetime."";
$queryab_ll = "SELECT * FROM absence WHERE start > ".$datetime."";
$querygo_ll = "SELECT * FROM goingout WHERE start > ".$now_datetime." AND start < ".$tmdate."";
$querygo_ing = "SELECT * FROM goingout WHERE start < ".$now_datetime." AND endtime > ".$now_datetime."";
$querygo_ed = "SELECT * FROM goingout WHERE endtime < ".$now_datetime." AND start > ".$todate."";
$queryeo_ing = "SELECT * FROM earlyout WHERE start < ".$now_datetime." AND start > ".$todate."";
$queryeo_ll = "SELECT * FROM earlyout WHERE start > ".$now_datetime." AND start <".$tmdate."";

$resultla_ing = mysqli_query($conn, $queryla_ing);
$resultla_ed = mysqli_query($conn, $queryla_ed);
$resultab_ll = mysqli_query($conn, $queryab_ll);
$resultab_ing = mysqli_query($conn, $queryab_ing);
$resultgo_ll = mysqli_query($conn, $querygo_ll);
$resultgo_ing = mysqli_query($conn, $querygo_ing);
$resultgo_ed = mysqli_query($conn, $querygo_ed);
$resulteo_ing = mysqli_query($conn, $queryeo_ing);
$resulteo_ll = mysqli_query($conn, $queryeo_ll);
?>

<?php
while( $row = mysqli_fetch_assoc($resultla_ing)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."lateattending"."'</script>";
}
while( $row = mysqli_fetch_assoc($resultla_ed)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."lateattended"."'</script>";
}
while( $row = mysqli_fetch_assoc($resultab_ing)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."absence"."'</script>";
}
while( $row = mysqli_fetch_assoc($resultab_ll)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."willabsence"."'</script>";
}
while( $row = mysqli_fetch_assoc($resultgo_ll)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."willgoingout"."'</script>";
}
while( $row = mysqli_fetch_assoc($resultgo_ing)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."goingouting"."'</script>";
}
while( $row = mysqli_fetch_assoc($resultgo_ed)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."goingouted"."'</script>";
}
while( $row = mysqli_fetch_assoc($resulteo_ing)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."earlyouting"."'</script>";
}
while( $row = mysqli_fetch_assoc($resulteo_ll)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."willearlyout"."'</script>";
}
?>
