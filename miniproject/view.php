<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <title>miniproject(php)</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="viewstyle.css">
  </head>
  <body>
      
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="view.php" style=" margin-right: 900px; ">Bloom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="collapse navbar-collapse" id="navbarNavAltMarkup" >
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="view.php">Home <span class="sr-only">(current)</span></a>
     
      <a class="nav-item nav-link" href="product.php">Products</a>
      
    </div>
  </div>
</nav>


<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <?php
    
    if (!empty($_SESSION['name']) && !empty($_SESSION['pricee']) && !empty($_SESSION['descriptions'])) {
      $_SESSION['name'];
      $_SESSION['pricee'];
      $_SESSION['descriptions'];
      $_SESSION['photo'];
      $arr1 = explode("<br>", $_SESSION['name']);
      $arr2 = explode("<br>", $_SESSION['pricee']);
      $arr3 = explode("<br>", $_SESSION['descriptions']);
      $arr4 = explode("<br>", $_SESSION['photo']);
      for ($i = 0; $i < count($arr1) - 1; $i++) {
          echo ('<div class="col-md-4 mt-2">
          <div class="card">
              <div class="card-body">
                  <div class="card-img-actions"> <img src="images/'.$arr4[$i].'" class="card-img img-fluid" alt="Image" id="pimage"> </div>
              </div>
              <div class="card-body bg-light text-center">
                  <div class="mb-2">
                      <h5 class="font-weight-semibold mb-2" style="color:#80765c;">' . $arr1[$i] . '</h5><p class="text-muted" data-abc="true">' . $arr3[$i] . '</p>
                  </div>
                  <h4 class="mb-0 font-weight-semibold">$' . $arr2[$i] . '</h4>
                  <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i></div>
                  <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-primary"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
              </div>
          </div>
      </div>');
      }
  } else {
      echo ('<div class="container" id="error"> <h2>There are no products to display!!! </h2></div>');
  }
    ?>
    </div>
</div>





<!-- PHP -->













<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>


<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>

  </body>
</html>