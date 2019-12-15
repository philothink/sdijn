<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $handle = @fopen("./data.txt", "r"); //읽기 모드로 text문서 열기
                  if(!$handle) die("Not Found!");//실패시 경고문

                  for ($i=0 ; !feof($handle) ; $i++) { //텍스트 문서에서 한줄한줄 읽어와 배열에 저장
                      $buffer[$i] = fgets($handle, 1000);
    echo $i."번째 줄 : ".$buffer[$i]."<br/>";
       }
        fclose($handle);//파일 닫기

     ?>
  </body>
</html>
