<?php
$conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia'); // mysqli DB


$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)) {
  $list = $list."<li><a href=\"post.php?id={$row['id']}\">{$row['title']}</a></li>";
} // 목차 출력
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>S.S.G 19011580 이서현 게시판</title> <!-- 웹페이지 이름 -->
    <link rel="stylesheet" href="style.css"> <!-- CSS 참조 -->
  </head>
  <body>
    <h1>Bulletin Board</h1> <!-- 홈 제목 -->
    <ol>
      <?=$list?> <!-- 목차 출력 -->
    </ol>

    <button><a href="create.php">create</a></button> <!-- 글 생성 버튼 -->
  </body>
</html>
