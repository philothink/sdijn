<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table>
      <tr>
        <td>
          <form method="post">
              <input type="text" id="focus_target" name="cardnum" autofocus>
              <input type="submit" name="name">
          </form>

          <?php
          $sql = "INSERT INTO cardtag_library (`cardnum`, `time`) VALUES('".$_POST['cardnum']."', now())";
          $result = mysqli_query($conn, $sql);
          $sql = "SELECT * FROM cardtag_library WHERE ID = LAST_INSERT_ID()";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

           ?>

        </td>
        <td>
<?php  echo $row['time']; ?>


        </td>
      </tr>
    </table>



  </body>
</html>
