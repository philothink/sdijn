<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM timetable");
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
  <article>
    <form class="" action="timetable.php" method="post">
      <p>
        좌석번호 : <input type="text" name="seatnum">
      </p>
      <p>
        이름 : <input type="text" name="sname">
      </p>
      <input type="submit" name="name">
    </form>
</article>
<?php
while( $row = mysqli_fetch_assoc($result)){
echo "<script> document.getElementById('".$row['seatnum']."').className='"."early"."'</script>";
}
?>
<?php
$row = mysqli_fetch_assoc($result);
$sname = mysqli_real_escape_string($conn, $_POST['sname']);
$sql = "SELECT * FROM timetable WHERE name='".$sname."'";
$result  = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($result->num_rows == 1){
  $time = mysqli_fetch_assoc($result);
  }
  else{
  }
  ?>
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
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
      <td colspan="2" rowspan="2"> <?php echo $sname ?> </td>
    </tr>
    <tr bgcolor="green" align ="center">
    <p><td colspan="12">안녕하세요</td></p>
    </tr>

    <tr>
      <tr>
        <td width="60" >&nbsp;</td>
        <td width="60" id='429' >429 &nbsp;<input type="checkbox"></td>
        <td width="60" id='428' >428 &nbsp;<input type="checkbox"></td>
        <td width="60" >427 &nbsp;<input type="checkbox"></td>
        <td width="60" >426 &nbsp;<input type="checkbox"></td>
        <td width="51"  rowspan="50">&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
        <td width="60" >&nbsp;</td>
    </tr>
</table>

<div id="control">
  <input type="button" value="외출" onclick="document.getElementById('428').className='out'"/>
  <input type="button" value="조퇴" onclick="document.getElementById('428').className='early'"/>
  <a href="/write.php">쓰기</a>
  <a href="/modify.php">수정</a>
  <a href="/delete.php">삭제</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://localhost/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
</body>

</html>
