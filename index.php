<php
$url = "https://api.currencyapi.com/v3/historical?apikey=YOUR-APIKEY&base_currency=USD&date=2020-10-01";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);
print_r($response);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CM0SW06PX4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-CM0SW06PX4');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite Moguls</title>
    <link rel="icon" href="./img/icon.jpeg" type="img/x-icon" style="border-radius:50 ;">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Bite Moguls</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Drinks</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Rice</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <!-- slide -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="width:300px; height:500px;" class="d-block w-100" src="./img/s1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img style="width:300px; height:500px;" class="d-block w-100" src="./img/s2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img style="width:300px; height:500px;" class="d-block w-100" src="./img/s3.jpg" alt="Third slide">
          </div>
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
      <div>       
        <h1 style="color: rgb(0, 46, 148);">Let food be thy medicine and medicine be thy <span class="badge badge-secondary">FOOD</span></h1>
      </div>
      <!-- Card -->
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="./img/c2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Fried Rice</h5>
            <p class="card-text">Oyster sauce, soy sauce, grain white rice, toasted sesame oil,</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="./img/c1.jfif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Burger</h5>
            <p class="card-text">The secret to incredibly juicy burger patties is the addition of crushed crackers or panko breadcrumbs to hold in the natural fat and juices. We definitely recommend using crackers if you have them. Adding crushed crackers is an old-school method to add more flavor than plain breadcrumbs.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="./img/c3.jpg.crdownload" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Dragon fruit juice</h5>
            <p class="card-text">Dragon fruit is low in calories and high in fiber, with enough nutrients and antioxidants to be considered a superfood</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <!-- number -->
      <div class="mt-2">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
      <!-- Footer -->
      <footer class="text-center text-white " style="background-color: #343a40;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->
        

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #343a40;">
          © 2022 Copyright all right reserved | by❤️
          <a class="text-white" href="https://www.facebook.com/amesh.kavinda">Amesh De Silva</a>
        </div>
        <!-- Copyright -->
      </footer>
      
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
