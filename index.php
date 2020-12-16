<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="peter munene">
    <title>News</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">News App</h1>
            <p class="lead">This is a simple PHP app that can be used to dispaly news</p>
            <hr class="my-4">
            <p>It uses API and simple bootstrap integration</p>
            <hr class="my-4">
        </div>

        <?php
                $url = 'https://saurav.tech/NewsAPI/everything/cnn.json';
                $response = file_get_contents($url);
                $data = json_decode($response);
        ?>

        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="bg-light border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading">Sources</div>
   
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                       
                        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
          
            <div class="col-md-8">
            <?php
                    foreach ($data->articles as $news) {
                ?>
                    <div class="card mb-4">
                        <div class="row no-gutters mb-4">
                            <div class="col-auto">
                                <img alt="" style="width: 25rem;" src="<?php echo $news->urlToImage; ?>" data-holder-rendered="true">

                            </div>
                            <div class="col">
                                <div class="card-block px-2">
                                    <h3 class="mb-1">
                                        <a class="text-dark" href="<?php echo $news->url; ?>"><?php echo $news->title; ?></a>
                                    </h3>
                                    <p class="card-text"><?php echo $news->description; ?></p>
                                    <p class="card-text"><?php echo $news->publishedAt; ?></p>
                                    <p class="mb-1 text-muted"><?php echo $news->author; ?></p>
                                    <a href="<?php echo $news->url; ?>">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>