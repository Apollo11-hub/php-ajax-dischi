<?php


include __DIR__ ."/api.php";


  $success = $array_db['success'];

  if($success){
    $muisc_db = $array_db['response'];
    $result = '';
  }else{
    $muisc_db = '';
    $result =' <h1> Caricamento in corso </h1>';
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify</title>
</head>
<body>
    <?php echo $result ?>
    <div
    <?php foreach ($muisc_db as $music): ?>
    >
      <img src="<?php echo $music['poster']; ?>" alt="<?php echo $music['title']; ?>">
      <h2><?php echo $music['title']; ?></h2>
      <h3><?php echo $music['author']; ?></h3>
      <h4><?php echo $music['genre']; ?></h4>
      <h5><?php echo $music['year']; ?></h5>
    </div <?php endforeach; ?> >
</body>
</html>