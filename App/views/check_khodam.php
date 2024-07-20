<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Khodam</title>
    <link rel="icon" type="image/x-icon" href="https://pbs.twimg.com/media/ErliiwnUUAEOe1R.jpg">
    <!-- gatau apa aja ini wkwk -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/e665567722.js" crossorigin="anonymous"></script>
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="custom-border p-4">
                    <h2>Siapakah sosok asli penghuni tubuhmu?</h2>
                    <p>langsung cek kebenarannya dibawah</p>
                    <!-- Image placeholder -->
                    <img src="https://www.batamnews.co.id/foto_berita//63harimaucisewu.jpg" alt="Thumbnail Image" class="img-fluid mb-4 rounded">
                    <!-- Form -->
                    <form>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" required name="username" placeholder="apalagi kalau bukan nama">
                            <div class="invalid-feedback">
                                Please provide a valid name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Lahirnya kapan</label>
                            <input type="date" class="form-control" id="tanggalLahir" required>
                        </div>
                        <button type="submit" class="btn btn-success" name="action" value="add">Let's go</button>

                        <!-- <a href="/mvc" class="btn btn-danger">Cancel</a> -->

                    </form>
                </div>

                <div class="custom-border p-4">
                    <h2>Ini daftar khodam people-people</h2>
                    <?php if (empty($posts)) : ?>
                        <div class="alert alert-warning text-center" role="alert">
                            No khodam found.
                        </div>
                    <?php else : ?>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($posts as $index => $post) : ?>
                                    <div class="carousel-item <?php if ($index == 0) echo 'active'; ?>">
                                        <!-- random image -->

                                        <div class="card mb-3">
                                            <img src="https://picsum.photos/800/400?random=<?php echo $index; ?>" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                                <p class="card-title">Sosok asli dari @<b><?php echo $post['username']; ?></b> adalah:</p>
                                                <h3 class="card-text"><?php echo $post['khodam']; ?></h3>
                                                <p class="card-text"><small class="text-muted">terdeteksi sejak <?php echo $post['created_at']; ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- tombol next prev -->

                            <!-- Add your carousel items here -->
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

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p class="copyright">
            &copy; <span id="year"></span> <span class="brand">Made with <span class="heart">&#10084;</span> by ibnu wildan</span>
        </p>
        <a href="https://github.com/ibnuwildann/mvc-check-khodam" target="blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/in/ibnuwildan/" target="_blank" class="linkedin-link"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/wild.ibn/" target="_blank" class="instagram-link"><i class="fab fa-instagram"></i></a>

    </footer>

    <script>
        // Update the year dynamically
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>