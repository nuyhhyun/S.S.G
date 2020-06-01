<?php
$conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia'); // mysqli DB

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
); // 삭제할 글 id 얻기

$sql = "
  DELETE
    FROM topic
    WHERE id = {$filtered['id']}
";
mysqli_query($conn, $sql); // DB에서 해당 글 삭제

header('Location: /bbs.php'); // 홈으로 이동
?>
