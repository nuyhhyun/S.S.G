<?php
$conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia'); // mysqli DB

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
); // 수정한 글 정보 가져오기

$sql = "
  UPDATE topic
    SET
      title = '{$filtered['title']}',
      description = '{$filtered['description']}'
    WHERE
      id = {$filtered['id']}
";
mysqli_query($conn, $sql); // DB에 수정된 글 정보 전송

$id = $filtered['id'];
header('Location: /post.php?id='.$id); // 수정된 글로 이동
?>
