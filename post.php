<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css"> <!-- CSS 참조 -->

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
      $article['description'] = $row['description']; // 작성글 정보

    ?>
  </head>
  <body>

    <div id=t><?=$article['title']?></div> <!-- 제목 출력 -->
    <div id=d><?php echo nl2br($article['description'])?></div> <!-- 내용 출력 -->

    <button style="float:right; margin:20px;"><a href="update.php?id=<?=$_GET['id']?>">update</a></button> <!-- 수정 버튼 -->
    <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" style="margin:20px;" value="delete">
    </form> <!-- 삭제 버튼 -->
    <button style="margin-top:30px;"><a href="bbs.php">Home</a></button> <!-- 홈 버튼 -->
  </body>
</html>
