<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
date_default_timezone_set('Asia/Seoul');
$todays = "'".date('Y-m-d')."'";
$today = "'".date('Y-m-d 00:00:00')."'";
$now_datetimes = date('Y-m-d H:i:s');
$now_datetime = "'".date('Y-m-d H:i:s')."'";
$resultla = mysqli_query($conn, "SELECT * FROM lateattend WHERE start > $today");
$resulta = mysqli_query($conn, "SELECT * FROM absence WHERE enddate >= $todays");
$resultgo = mysqli_query($conn, "SELECT * FROM goingout WHERE start > $today");
$resulteo = mysqli_query($conn, "SELECT * FROM earlyout WHERE start > $today");
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <title>지각결석예정/외출조퇴</title>
  </head>
<body>
  <header>
    <h1>지각결석예정/외출조퇴</h1>

  </header>
  <p>
    <?php
      require("menu/menu.php");
    ?>
  </p>
<br>

  <div>
  <table class="table table-bordered" border="1" bordercolor="blue" align = "center">
    <tr>
      <td align = "center" bgcolor = "#cceeff"><h4>지각예정</h4></td>
      <td align = "center" bgcolor = "#cceeff"><h4>결석예정</h4></td>
      <td align = "center" bgcolor = "#cceeff"><h4>외출</h4></td>
      <td align = "center" bgcolor = "#cceeff"><h4>조퇴</h4></td>
    </tr>
    <tr>
      <td>
        <article>
        <form action="process_lateattend.php" method="post" class="inoutmanage" >
          <p>
            좌석번호 : <input type="text" name="seatnum">
          </p>
          <p>
            이름 : <input type="text" name="name">
          </p>
          <p>
            사유 : <input type="text" name="reason">
          </p>
          <p>
            등원예정 : <input type="datetime-local" name="start" value="<?php echo date('Y-m-d\TH:i:s'); ?>">
          </p>
          <input type="submit" value="기록">
        </form>

<br>
<br>
        <form action="process_lateattend_delete.php" method="post">
            <p>
              게시물 번호 : <input type="text" name="id">
            </p>
            <input type="submit" name="name" value="삭제">
          </form>
        </article>
      </td>


      <td>
        <article>
          <form action="process_absence.php" method="post">
            <p>
              좌석번호 : <input type="text" name="seatnum">
            </p>
            <p>
              이름 : <input type="text" name="name">
            </p>
            <p>
              사유 : <input type="text" name="reason">
            </p>
            <p>
              며칠부터 : <input type="date" name="start" value="<?php echo date('Y-m-d'); ?>">
            </p>
            <p>
              며칠까지 : <input type="date" name="enddate" value="<?php echo date('Y-m-d'); ?>">
            </p>
            <input type="submit" value="기록">
          </form>
        </form>

<br>
<br>
        <form action="process_absence_delete.php" method="post">
            <p>
              게시물 번호 : <input type="text" name="id">
            </p>
            <input type="submit" name="name" value="삭제">
          </form>
        </article>
      </td>

      <td>
        <article>
        <form action="process_goingout.php" method="post">
          <p>
            좌석번호 : <input type="text" name="seatnum">
          </p>
          <p>
            이름 : <input type="text" name="name">
          </p>
          <p>
            사유 : <input type="text" name="reason">
          </p>
          <p>
            언제부터 : <input type="datetime-local" name="start" value="<?php echo date('Y-m-d\TH:i:s'); ?>">
          </p>
          <p>
            언제까지 : <input type="datetime-local" name="endtime" value="<?php echo date('Y-m-d\TH:i:s'); ?>">
          </p>
          <input type="submit" value="기록">
        </form>
      </form>

<br>
<br>
      <form action="process_goingout_delete.php" method="post">
          <p>
            게시물 번호 : <input type="text" name="id">
          </p>
          <input type="submit" name="name" value="삭제">
        </form>
      </article>
      </td>
      <td>
        <article>
        <form action="process_earlyleave.php" method="post">
          <p>
            좌석번호 : <input type="text" name="seatnum">
          </p>
          <p>
            이름 : <input type="text" name="name">
          </p>
          <p>
            사유 : <input type="text" name="reason">
          </p>
          <p>
            언제 : <input type="datetime-local" name="start" value="<?php echo date('Y-m-d\TH:i:s'); ?>">
          </p>
          <input type="submit" value="기록">
        </form>
      </form>

<br>
<br>
      <form action="process_earlyleave_delete.php" method="post">
          <p>
            게시물 번호 : <input type="text" name="id">
          </p>
          <input type="submit" name="name" value="삭제">
        </form>
      </article>
      </td>
    </tr>
    <tr>
      <td>
        <?php
        if(empty($_GET['id']) === false ) {
            $sql = "SELECT lateattend.id,seatnum,name,reason,start FROM lateattend WHERE lateattend.id=".$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<div>';
            echo htmlspecialchars($row['seatnum']).'&emsp;';
            echo htmlspecialchars($row['name']).'&emsp;';
            echo '</div>';
            echo strip_tags($row['reason'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
            echo '<br>';
            echo htmlspecialchars($row['start']);
        }
        ?>
    </td>
      <td>
        <?php
        if(empty($_GET['id']) === false ) {
            $sql = "SELECT absence.id,seatnum,name,reason,start,enddate FROM absence WHERE absence.id=".$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<div>';
            echo htmlspecialchars($row['seatnum']).'&emsp;';
            echo htmlspecialchars($row['name']).'&emsp;';
            echo '</div>';
            echo strip_tags($row['reason'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
            echo '<br>';
            echo htmlspecialchars($row['start']);
            echo '<br>';
            echo htmlspecialchars($row['enddate']);
        }
        ?>
    </td>
<td>
  <?php
  if(empty($_GET['id']) === false ) {
      $sql = "SELECT goingout.id,seatnum,name,reason,start,endtime FROM goingout WHERE goingout.id=".$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo '<div>';
      echo htmlspecialchars($row['seatnum']).'&emsp;';
      echo htmlspecialchars($row['name']).'&emsp;';
      echo '</div>';
      echo strip_tags($row['reason'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
      echo '<br>';
      echo htmlspecialchars($row['start']);
      echo '<br>';
      echo htmlspecialchars($row['endtime']);
  }
  ?>
</td>
<td>
  <?php
  if(empty($_GET['id']) === false ) {
      $sql = "SELECT earlyout.id,seatnum,name,reason,start FROM earlyout WHERE earlyout.id=".$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo '<div>';
      echo htmlspecialchars($row['seatnum']).'&emsp;';
      echo htmlspecialchars($row['name']).'&emsp;';
      echo '</div>';
      echo strip_tags($row['reason'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
      echo '<br>';
      echo htmlspecialchars($row['start']);
  }
  ?>
</td>
  </tr>
<tr>
  <td>
        <?php
        while( $row = mysqli_fetch_assoc($resultla)){
          echo '<a href="/inoutmanage.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('name')]).'</a> &emsp;';
        }
        ?>
      </td>
      <td>
        <?php
        while( $row = mysqli_fetch_assoc($resulta)){
          echo '<a href="/inoutmanage.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('name')]).'</a> &emsp;';
        }
        ?>
      </td>
      <td>
        <?php
        while( $row = mysqli_fetch_assoc($resultgo)){
          echo '<a href="/inoutmanage.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('name')]).'</a> &emsp;';
        }
        ?>
      </td>
      <td>
        <?php
        while( $row = mysqli_fetch_assoc($resulteo)){
          echo '<a href="/inoutmanage.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('name')]).'</a> &emsp;';

        }

        ?>
      </td>
    </tr>
  </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
