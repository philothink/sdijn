<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

?>


<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://localhost/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <title>지각결석예정/외출조퇴</title>
</head>
<body>
    <header>
 <h1>출결관리</h1>
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
          등원예정 : <input type="text" name="name">
        </p>

        <input type="submit">
      </form>
    </td>
    <td>
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
          언제부터 : <input type="text" name="name">
        </p>
        <p>
          언제까지 : <input type="text" name="reason">
        </p>

        <input type="submit">
      </form>
    </td>
    <td>
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
          언제 : <input type="text" name="name">
        </p>

        <input type="submit">
      </form>
    </td>
    <td>
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
          며칠부터 : <input type="text" name="name">
        </p>
        <p>
          며칠까지 : <input type="text" name="reason">
        </p>

        <input type="submit">
      </form>
    </td>
  </tr>
  <tr>
    <td>
      <article>
    <?php
    if(empty($_GET['id']) === false ) {
        $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
        echo '<p>'.htmlspecialchars($row['name']).'</p>';
        echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
    }
    ?></td>
    <td>
      <article>
    <?php
    if(empty($_GET['id']) === false ) {
        $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
        echo '<p>'.htmlspecialchars($row['name']).'</p>';
        echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
    }
    ?>
  </td>
    <td></td>
    <td></td>
  </tr>


  <tr>
    <td>
      <ol>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM goingout");
    while( $row = mysqli_fetch_assoc($result)){
      echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('title')]).'</a></li>'."\n";
    }
    ?>
      </ol>
    </td>
    <td>

    </td>
    <td>

    </td>
    <td>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM earlyout");
      while( $row = mysqli_fetch_assoc($result)){
        echo '<li><a href="/goingout.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('name')]).'</a></li>'."\n";
      }
      ?>
    </td>
  </tr>
</table>
</div>
</body>
</html>
