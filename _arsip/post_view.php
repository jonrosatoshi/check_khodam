<!doctype html>
<html>

<head>
    <title>Posts List test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="../../Public/script/oke.js"></script>

</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Just Feed
        </a>
    </nav>

    <div class="container mt-5">
        <!-- tombol add post -->

        <a href="?action=add" class="btn btn-primary float-right">
            <span class="fas fa-plus"></span> Post</a>

        <a href="?action=update" class="btn btn-primary float-right">
            <span class="fas fa-plus"></span> Check khodam</a>

        <h1 style="margin-bottom: 15px;">Post List</h1>
        <?php if (empty($posts)) : ?>
            <div class="alert alert-warning text-center" role="alert">
                No posts found.
            </div>
        <?php else : ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($posts as $index => $post) : ?>
                        <div class="carousel-item <?php if ($index == 0) echo 'active'; ?>">
                            <div class="card mb-3">
                                <img class="card-img-top" width="800" height="600" loading="lazy" src="https://images.pexels.com/photos/21621417/pexels-photo-21621417/free-photo-of-post-on-pier-on-lake.jpeg?auto=compress&cs=tinysrgb&w=800&h=720&dpr=1" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">@<?php echo $post['username']; ?></h5>
                                    <p class="card-text"><?php echo $post['khodam']; ?></p>
                                    <p class="card-text"><small class="text-muted"><?php echo $post['created_at']; ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>