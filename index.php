<?php 
require __DIR__ . '/oop_movies/oop_movies'
; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hey</h1>
<?php 
foreach ($movies as $movie){
; ?>

<div>
    <h1><?php $movie->title ; ?></h1>
    <h3><?php $movie->genre ; ?></h3>
    <p><?php $movie->description ; ?></p>
    <h2><?php $movie->time ; ?></h2>
</div>

<?php }; ?>

    
</body>
</html>



