<!DOCTYPE html>
<html lang="en">
    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="static/css/own.css">
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/navbartoggle.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Public Market - Index Page</title>
</head>

<!--compulsorypartend-->
<body>
    <!--navbarstart-->
    <?php include('component/navbar.php'); ?>
    <!--navbarend-->
    
    <!--carouselstart-->
    <div class="carousel slide" data-bs-ride="carousel" id="carousel">
      <div class="carousel-inner">
     <div class="carousel-item active">
          <img src="static/pics/market1.jpg" alt="first slide" class="rounded d-block w-100 img-fluid" style="width:100%">
          <div class="carousel-caption d-none-d-md-block">
            <h1>Search the nearest market</h1>
            <p>The website including the newest public market details, providing the easiest way for you to search your needs.</p>
          </div>
        </div>
        <div class="carousel-item" >
          <img src="static/pics/market2.jpg" alt="second slide" class="rounded d-block w-100 img-fluid" style="width:100%">
          <div class="carousel-caption d-none-d-md-block">
            <h1>Help to contribute the website</h1>
            <p>
              This website still needs your help to accomplish the information.
            </p>
          </div>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-slide="prev" data-bs-target="#carousel">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span></button>
    <button class="carousel-control-next" type="button" data-bs-slide="next" data-bs-target="#carousel">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span></button>
    </div>
    <!--carouselend-->

    <!----->
    <!----->

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <img src="static/pics/mapexample.jpg" alt="" class="rounded w-100">
          <div class="card-body">
            <h2 class="card-title"> Map </h2>
            <p class="card-text"> You can use our website to see the map of the market.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="static/pics/cursor.jpg" class="rounded w-100">
          <div class="card-body">
            <h2 class="card-title"> Edit casually</h2>
            <p class="card-text"> Anytime you edit, Anytime the information changes. Try to explore them. Fix the error.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="static/pics/search.jpeg" class="rounded w-auto">
          <div class="card-body">
            <h2 class="card-title"> Search</h2>
            <p class="card-text"> Search the market you are looking for.</p>
          </div>
        </div>
      </div>
    </div>

    <!--footerstart-->
    <?php include('component/footer.php'); ?>
    <!--footerstart-->

    <!--cookiesetting-->
    <!---->
</body>
</html>
<!--Connect to the database start-->
<!--Connect to the database end-->
