<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
      .nav-link:hover {
        text-decoration: underline;
        }
  </style>
  <body>
    
  <div class="form-sign-in d-flex justify-content-center align-items-center" id="form-sign-in">
        <button class="btn btn-out text-white" id = "close-form" onclick="closeFormSignIn()">X</button>
        <div class="container bg-white-opacity w-25 h-50 shadow">
            <form action="#" method="GET" class="flex-column align-items-center h-100 d-flex justify-content-center">
                <h2 class="pb-4 text-white">Sign in</h2>
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="Username" name = "user">
                <input class="form-control mb-4 text-white bg-dark-opacity shadow" type="password" placeholder="Password" name = "password">
                <input class="btn btn-light w-50" type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
    <nav class="navbar navbar-expand navbar-light shadow-sm p-3 mb-3 flex-md-row flex-column">
        <a href="#" class="navbar-brand pl-3">
            <h5 class="m-0">Welcome to my website</h5>
        </a>
        <ul class="nav navbar-nav ml-md-auto">
            <li class="nav-item">
                <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#news" class="nav-link">News</a>
            </li>
            <li class="nav-item">
                <a href="#product" class="nav-link">Product</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link font-weight-bold text-success">
                Xin chao
                </a>
            </li>
        </ul>
    </nav>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>