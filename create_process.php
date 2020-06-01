<?php
$conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia'); // mysqli DB
$sql = "
  INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";
mysqli_query($conn, $sql); // DB에 생성한 글 전송

$id = mysqli_insert_id($conn);
header('Location: /post.php?id='.$id); // 생성된 글 페이지로 이동
?>
