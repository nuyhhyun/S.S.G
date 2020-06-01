<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'zusqpqp1122',
  'fantasia');

settype($_POST['id'], 'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "
  DELETE
    FROM topic
    WHERE id = {$filtered['id']}
";
mysqli_query($conn, $sql);

header('Location: /bbs.php');
?>
