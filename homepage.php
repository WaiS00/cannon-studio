<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Cannon Studio</title>
    <link rel="icon" href="resources/img/cannon_logo.png" />
</head>

<body>
    <?php include 'header.php';?>

    <section id="carousel-picture">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources/img/carousel-homepage.png" class="d-block w-100 carouselimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> It's yer boi, Cannon Studio</h5>
                    <p> “The Most Cheap-pluck Camera Award”</p>
                </div>
            </div>
        <div class="carousel-item">
            <img src="resources/img/carousel-homepage2.png" class="d-block w-100 carouselimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> It's yer boi, Cannon Studio</h5>
                    <p> “The Most Cheap-pluck Camera Award”</p>
                </div>
        </div>
        <div class="carousel-item">
            <img src="resources/img/carousel-homepage3.png" class="d-block w-100 carouselimg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> It's yer boi, Cannon Studio</h5>
                    <p> “The Most Cheap-pluck Camera Award”</p>
                </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>

    <section id="new-release">
    <div class="container new">
        <i href="#" class="bi bi-newspaper new-release-cam"> New Release !</i>
    </div>
        <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="resources/img/dslr-1.png" class="img-fluid rounded-start dslr-image" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Cannon EOS R6 </h5>
                <p class="card-text">Conquer the darkness with the EOS R6. This full-frame mirrorless camera based on the revolutionary RF mount comes with powerful In-Body Image Stabilization up to 8 stops.</p>
                <p class="card-text"><small class="text-muted">While stock last hehe</small></p>
                <button class="btn btn-primary view-btn" type="button">Click here to view more!</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


    <?php include 'footer.php';?>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>