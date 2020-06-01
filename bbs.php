<?php
$conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia');


$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)) {
  $list = $list."<li><a href=\"post.php?id={$row['id']}\">{$row['title']}</a></li>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>S.S.G 19011580 이서현 게시판</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Bulletin Board</h1>
    <ol>
      <?=$list?>
    </ol>

    <button><a href="create.php">create</a></button>
  </body>
</html>
