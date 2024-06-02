<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShopNest</title>
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Font Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <!-- CSS file -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <!--- Navbar --->
  <div class="container-fluid p-0 flex-grow-1">
    <!--- First child --->
    <?php include './nav.php'; ?>

    <!--- Second child --->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>

    <!--- Third child --->
    <div class="bg-light">
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">Communication is at the heart of ShopNest and community</p>
    </div>

    <!--- Fourth child --->
 <!--- fourth child --->
 <div class="row container-fluid">
      <div class="col-md-10">
        <!--- products --->
        <div class="row">
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./img/carrot1.jpg" class="card-img-top" alt="carrot">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>

              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./img/dairy_chocolate.jpg" class="card-img-top" alt="dairy_milk_chocolate">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>

              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./img/Red_capsicum_01.jpg" class="card-img-top" alt="red_capsicum">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>

              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./img/yellow_capsicum_02.jpg" class="card-img-top" alt="yellow_capsicum">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>

              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./img/vegetables.jpg" class="card-img-top" alt="vegetables">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>

              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./img/apple1.jpg" class="card-img-top" alt="single_apple">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-2 bg-secondary p-0">
        
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Delivery Brands</h4>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Brand1</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Brand2</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Brand3</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Brand4</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Brand5</a>
          </li>
        </ul>
        <!--- categories to be dislpayed --->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Category1</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Category2</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Category3</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Category4</a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link text-light">Category5</a>
          </li>
        </ul>

      </div>

    </div>

    <!--- last child --->

  </div>

  <!--- Footer --->
  <footer class="footer bg-info text-center p-3 mt-auto">
    <p>All rights reserved &copy; Designed by Aryan Chauhan & Aastha Singh</p>
  </footer>

  <!-- Bootstrap JS link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
