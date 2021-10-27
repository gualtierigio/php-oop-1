<?php 
require __DIR__ . '/oop-movies/oop-movies.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
foreach ($movies as $movie){
 ?>

<div>
    <h1><?php echo $movie->title ; ?></h1>
    <h3><?php echo $movie->genre ; ?></h3>
    <p><?php echo $movie->description ; ?></p>
    <h2><?php echo $movie->time ; ?></h2>
</div>

<?php } ?>

    
</body>
</html>



