<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

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
  </head>
  <body>

    <div id=t><?=$article['title']?></div>
    <div id=d><?php echo nl2br($article['description'])?></div>

    <button style="float:right; margin:20px;"><a href="update.php?id=<?=$_GET['id']?>">update</a></button>
    <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" style="margin:20px;" value="delete">
    </form>
    <button style="margin-top:30px;"><a href="bbs.php">Home</a></button>
  </body>
</html>
