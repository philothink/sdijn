<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="target">
    <header>
        <h1><a href="http://localhost/index.php">JavaScript</a></h1>
  </header>
  <nav>
      <ol>
  <?php
  while( $row = mysqli_fetch_assoc($result)){
    echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row[htmlspecialchars('title')]).'</a></li>'."\n";
  }
  ?>
      </ol>
  </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'"/>
    <a href="/write.php">쓰기</a>
    <a href="/modify.php">수정</a>
    <a href="/delete.php">삭제</a>
  </div>
  <article>
    <form action="processmodify.php" method="post">
      <p>
        이름 : <input type="text" name="author">
      </p>
      <p>
        비밀번호 : <input type="text" name="password">
      </p>
      <input type="submit" name="name">
    </form>
  </article>
</body>
</html>
