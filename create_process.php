<?php
$conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia');
$sql = "
  INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";
mysqli_query($conn, $sql);

$id = mysqli_insert_id($conn);
header('Location: /post.php?id='.$id);
?>
