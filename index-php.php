<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
    </header>

    <section>

        <!-- <FilterSelected @selectionChanged='setSelectionValue'/> -->

        <div class='container'>

            <?php foreach($database as $album) { ?>

                <div class="single-album">

                    <div class="single-album-poster">
                        <img src="<?php echo $album['poster']?>" alt=""> 
                    </div>

                    <div class="single-album-title"> 
                        <?php echo $album['title'] ?>
                    </div>

                    <div class="single-album-author">
                        <?php echo $album['author'] ?>
                    </div>

                    <div class="single-album-year"> 
                        <?php echo $album['year'] ?>
                    </div>
                </div>

            <?php } ?>

        </div>
    
    </section>

</body>
</html>