<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'zusqpqp1122',
  'fantasia');

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'title'=>mysqli_real_escape_string($conn, $_POST['title']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
  UPDATE topic
    SET
      title = '{$filtered['title']}',
      description = '{$filtered['description']}'
    WHERE
      id = {$filtered['id']}
";
mysqli_query($conn, $sql);

$id = $filtered['id'];
header('Location: /post.php?id='.$id);
?>
