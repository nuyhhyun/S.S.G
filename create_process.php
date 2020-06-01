<?php
$conn = mysqli_connect(
  'localhost',
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
