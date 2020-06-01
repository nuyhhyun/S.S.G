<?php

  $conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia'); // mysqli DB

  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description']; // 글 정보 가져오기

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css"> <!-- CSS 참조 -->
  </head>
  <body>
      <form action="update_process.php" method="post">
         <input type="hidden" name="id" value="<?=$_GET['id']?>"> <!-- 글 정보 전송 -->
         <p>
           <input type="text" name="title" size=50px value="<?=$article['title']?>"> <!-- 입력된 제목 띄워진 수정 창 -->
         </p>
         <p>
           <textarea name="description" style="width:400px; height:200px"><?=$article['description']?></textarea> <!-- 입력된 내용 띄워진 수정 창 -->
         </p>
         <p>
           <input type="submit"> <!-- 제출 버튼 -->
         </p>
       </form>
  </body>
</html>
