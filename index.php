<?php 

require_once __DIR__ . '/models/Movie.php';

$rawData = file_get_contents('./db/db.json');

$data = json_decode($rawData, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie list</title>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<main>
        <section>
            <?php foreach($data as $film) { ?>
                <?php $movie = new Movie($film['title'], $film['poster'], $film['vote']); ?>
                <article>
    
                    <h1> <?php echo $movie->title ?> </h1>
                    <img src="<?php echo $movie->poster ?>" alt="poster path">
                    <p><?php echo $movie->vote ?></p>
    
                </article>
            <?php } ?>
        </section>
    </main>
</body>
</html>