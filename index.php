<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bad.word</title>
  </head>
  <body>
    <?php
      $par = 'Lorem ipsum dolor sit amet';
      $parlenght = strlen($par);
      $badword = $_GET['bad'];
      $censured = str_replace($badword,'***',$par);
    ?>
    <h1>
      <?php echo $par;?>
    </h1>
    <h2>length : <?php echo $parlenght?></h2>
    <h1>paragraph censured : <?php echo $censured; ?> </h1>
  </body>
</html>
