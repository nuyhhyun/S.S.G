<?php

  $conn = mysqli_connect(
  '192.168.0.14',
  'root',
  'zusqpqp1122',
  'fantasia');

  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <form action="update_process.php" method="post">
         <input type="hidden" name="id" value="<?=$_GET['id']?>">
         <p>
           <input type="text" name="title" size=50px value="<?=$article['title']?>">
         </p>
         <p>
           <textarea name="description" style="width:400px; height:200px"><?=$article['description']?></textarea>
         </p>
         <p>
           <input type="submit">
         </p>
       </form>
  </body>
</html>
