<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sptfy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
    <header>
        <img src="./img/spotify-logo.png" alt="spotify-logo">
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                
                <?php 
                    require_once __DIR__ . "/database/database.php";
                    foreach($database as $item) {
                        echo
                        "<div class='col d-flex'>
                            <div class='album-card'>
                                <img src='{$item['poster']}' alt='image of {$item['title']}'>
                                <div class='title'>{$item['title']}</div>
                                <div class='album-info'>
                                    <div class='artist'>{$item['author']}</div>
                                    <div class='year'>{$item['year']}</div>
                                </div>
                            </div>
                        </div>";
                    };
                ?>

            </div>
        </div>
    </main>
</body>
</html>