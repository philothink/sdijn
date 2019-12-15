<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>시대인재 신관</title>
  </head>

<body id="target">
  <header>
    <h1><a href="/index.php">시대인재 신관</a></h1>
    <img src="http://img.sdij.com/sd2019/pc/logo.png" alt="sdij logo">
  </header>
  <p>
    <?php
      require("menu/menu.php");
    ?>
  </p>
<h1>안녕하세요?</h1>
<h2>반갑습니다^^</h2>
<?php /*
<nav>
    <ol>
  <?php
  while( $row = mysqli_fetch_assoc($result)){
    echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('title')]).'</a></li>'."\n";
  }
  ?>
    </ol>
  </nav>
<div>
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
<input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
<input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
<a href="/write.php">쓰기</a>
<a href="/modify.php">수정</a>
<a href="/delete.php">삭제</a>


</div>
</article>
*/
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
