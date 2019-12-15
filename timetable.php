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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>시대인재 신관</title>
  </head>
<body>
  <header>
    <h1>개인별시간표</h1>
    <img src="http://img.sdij.com/sd2019/pc/logo.png" alt="sdij logo">
  </header>
  <p>
    <?php
      require("menu/menu.php");
    ?>
  </p>
<article class="">
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

<div>
<table border="1" width="787" align = "center">
    <tr bgcolor="blue" align ="center">
	<p><td colspan = "9" span style="color:white">시대인재 N 재종 개인별 시간표</td></p>
    </tr>

    <tr>
      <td td colspan = "9" align=right>
      <?php
      date_default_timezone_set('Asia/Seoul'); echo date('Y-m-d');
       ?>
     </td>
    </tr>
<style media="screen">
td {
  text-align: center;
  vertical-align: middle;
   }
</style>
    <tr>
      <td colspan="2" rowspan="3">선택1/선택2</td>
      <td>생활 매니저</td>
      <td>학습 상담</td>
      <td rowspan="3" border-top:1px solid "#000000" border-bottom:1px solid "#000000"></td>
      <td>좌석</td>
      <td>반명</td>
      <td colspan="2">이름</td>
    </tr>
    <tr>
      <td>생활 매니저1</td>
      <td rowspan="2">학습 상담</td>
      <td rowspan="2">좌석</td>
      <td rowspan="2">반명</td>
      <td colspan="2" rowspan="2"> <?php echo $sname ?> </td>
    </tr>
<td>생활 매니저2</td>
    <tr>

    </tr>
    <tr>
      <td colspan="9"></td>
    </tr>
    <tr align = "center" bgcolor="skybule">
	     <td>교시</td>
	     <td>시간</td>
	     <td>월</td>
       <td>화</td>
       <td>수</td>
       <td>목</td>
       <td>금</td>
       <td>토</td>
       <td>일</td>
    </tr>
    <tr>
      <td>0교시</td>
    	<td>08:00-08:30</td>
    	<td colspan="5">자습 08:15 이후 강의실 이동</td>
      <td rowspan="5">10주파이널</td>
      <td rowspan="5">자율자습</td>
    </tr>

    <tr>
      <td rowspan="2">1교시</td>
    	<td rowspan="2">08:30-10:10</td>
    	<td rowspan="1" style="font-weight:bold"><?php echo $row['월1'] ?></td>
      <td rowspan="1"><?php echo $row['화1'] ?></td>
      <td rowspan="1"><?php echo $row['수1'] ?></td>
      <td rowspan="1"><?php echo $row['목1'] ?></td>
      <td rowspan="1"><?php echo $row['금1'] ?></td>
    </tr>

    <tr>
      <td>08:30-10:10</td>
      <td>08:30-10:10</td>
      <td>08:30-10:10</td>
      <td>08:30-10:10</td>
      <td>08:30-10:10</td>
    </tr>
    <tr>
      <td rowspan="2">2교시</td>
      <td rowspan="2">10:30-12:10</td>
      <td rowspan="1"><?php echo $row['월2']?></td>
      <td rowspan="1"><?php echo $row['화2'] ?></td>
      <td rowspan="1"><?php echo $row['수2'] ?></td>
      <td rowspan="1"><?php echo $row['목2'] ?></td>
      <td rowspan="1"><?php echo $row['금2'] ?></td>
    </tr>

    <tr>
    <td>10:30-12:10</td>
    <td>10:30-12:10</td>
    <td>10:30-12:10</td>
    <td>10:30-12:10</td>
    <td>10:30-12:10</td>
    </tr>

    <tr>
    <td>점심식사</td>
    <td>12:10-13:20</td>
    <td colspan="7">점심식사 (12:10-13:20)</td>
    </tr>
    <tr>
    <td rowspan="2">3교시</td>
    <td rowspan="2">13:20-15:00</td>
    <td rowspan="1"><?php echo $row['월3'] ?></td>
    <td rowspan="1"><?php echo $row['화3'] ?></td>
    <td rowspan="1"><?php echo $row['수3'] ?></td>
    <td rowspan="1"><?php echo $row['목3'] ?></td>
    <td rowspan="1"><?php echo $row['금3'] ?></td>
    <td rowspan="7" colspan="2">자율학습</td>
    </tr>

    <tr>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    </tr>
    <tr>
    <td rowspan="2">4교시</td>
    <td rowspan="2">15:20-17:00</td>
    <td rowspan="1"><?php echo $row['월4'] ?></td>
    <td rowspan="1"><?php echo $row['화4'] ?></td>
    <td rowspan="1"><?php echo $row['수4'] ?></td>
    <td rowspan="1"><?php echo $row['목4'] ?></td>
    <td rowspan="1"><?php echo $row['금4'] ?></td>
    </tr>

    <tr>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    </tr>
    <tr>
    <td rowspan="2">4.5교시</td>
    <td rowspan="2">17:00-18:00</td>
    <td rowspan="1"><?php echo $row['월4.5'] ?></td>
    <td rowspan="1"><?php echo $row['화4.5'] ?></td>
    <td rowspan="1"><?php echo $row['수4.5'] ?></td>
    <td rowspan="1"><?php echo $row['목4.5'] ?></td>
    <td rowspan="1"><?php echo $row['금4.5'] ?></td>
    </tr>

    <tr>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    <td>08:30-10:10</td>
    </tr>
    <tr>
    <td>자습</td>
    <td>17:20-17:50</td>
    <td colspan="5"></td>
    </tr>
    <tr>
    <td>저녁식사</td>
    <td>17:50-19:00</td>
    <td colspan="7">저녁식사 (18:30-19:00 외출가능)</td>
    </tr>
    <tr>
    <td rowspan="2">5교시</td>
    <td rowspan="2">19:00-20:40</td>
    <td rowspan="1"><?php echo $row['월5'] ?></td>
    <td rowspan="1"><?php echo $row['화5'] ?></td>
    <td rowspan="1"><?php echo $row['수5'] ?></td>
    <td rowspan="1"><?php echo $row['목5'] ?></td>
    <td rowspan="1"><?php echo $row['금5'] ?></td>
    <td rowspan="5" colspan="2">자율자습</td>
    </tr>

    <tr>
    <td>18:30-20:10</td>
    <td>18:30-20:10</td>
    <td>18:30-20:10</td>
    <td>18:30-20:10</td>
    <td>18:30-20:10</td>
    </tr>
    <tr>
    <td>쉬는시간</td>
    <td>20:40-21:00</td>
    <td colspan="5"></td>
    </tr>
    <tr>
    <td rowspan="2">6교시</td>
    <td rowspan="2">21:00-21:50</td>
    <td rowspan="1"><?php echo $row['월6'] ?></td>
    <td rowspan="1"><?php echo $row['화6'] ?></td>
    <td rowspan="1"><?php echo $row['수6'] ?></td>
    <td rowspan="1"><?php echo $row['목6'] ?></td>
    <td rowspan="1"><?php echo $row['금6'] ?></td>
    </tr>

    <tr>
    <td>20:20-22:00</td>
    <td>20:20-22:00</td>
    <td>20:20-22:00</td>
    <td>20:20-22:00</td>
    <td>20:20-22:00</td>
    </tr>

    <tr>
    <td>심야</td>
    <td>22:00-24:00</td>
    <td colspan="5">자율자습</td>
    <td colspan="2" bgcolor="gray"></td>
    </tr>

</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
