<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM earlyout");
?>


<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <title>시대인재 신관</title>
  </head>


<body id="target">
  <header>
    <h1><a href="/index.php">좌석도</a></h1>
    <img src="http://img.sdij.com/sd2019/pc/logo.png" alt="sdij logo">
  </header>
  <p>
    <?php
      require("menu/menu.php");
    ?>
  </p>

  <style media="screen">
  table tr td.early{
    background-color: gray;
  }
  table tr td.out{
    background-color: green;
  }
  </style>


<div>
<table border="1" width="787">
<tr bgcolor="green" align ="center">
<p><td colspan="12">5층 좌석도</td></p>
</tr>

    <tr>
      <td colspan = "12" align=right>
        <?php
       echo date("Y/m/d");
       ?>
     </td>
    </tr>
    <tr>
      <tr>
        <td width="60" >&nbsp;</td>
        <td width="60" id='429' >429 &nbsp;<input type="checkbox"></td>
        <td width="60" id='428' >428 &nbsp;<input type="checkbox"></td>
        <td width="60" id='427' >427 &nbsp;<input type="checkbox"></td>
        <td width="60" id='426' >426 &nbsp;<input type="checkbox"></td>
        <td width="51"  rowspan="50">&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
    </tr>
</table>

    <?php
    while( $row = mysqli_fetch_assoc($result)){
    echo "<script> document.getElementById('".$row['seatnum']."').className='"."early"."'</script>";
    }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://localhost/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
