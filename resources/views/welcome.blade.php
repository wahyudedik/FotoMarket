<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foto Market - Landing Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Foto Market</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <h1>Welcome to Foto Market</h1>
      <p>Discover and purchase stunning photos captured by talented photographers.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
    </div>
  </div>

  <!-- Photo Gallery Section -->
  <section class="container my-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/300" class="card-img-top" alt="Photo 1">
          <div class="card-body">
            <h5 class="card-title">Photo 1</h5>
            <p class="card-text">Description of Photo 1.</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
      <!-- Add more photo cards here -->
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2023 Foto Market. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
