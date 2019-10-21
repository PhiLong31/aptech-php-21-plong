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
  <body>
    
  
  <nav class="navbar navbar-expand navbar-light shadow-sm p-3 mb-3 flex-md-row flex-column">
        <a href="#" class="navbar-brand pl-3">
            <h5 class="m-0">Welcome to my website</h5>
        </a>
        <a href="#" class="btn btn-outline-success ml-auto" id = "Sign-in-member" onclick="showSignIn()">Sign in</a>
    </nav>
    
    <div class="form-sign-in d-flex justify-content-center align-items-center" id="form-sign-in-2">
        <a class="btn btn-out text-white" id = "close-form" onclick="closeSignIn()">X</a>
        <div class="container bg-white-opacity w-25 h-50 shadow">
            <form action="#" method="POST" class="flex-column align-items-center h-100 d-flex justify-content-center">
                <h2 class="pb-4 text-white">Sign in</h2>
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="User" name = "user">
                <input class="form-control mb-2 text-white bg-dark-opacity shadow" type="text" placeholder="Password" name = "pass">
                <input class="btn btn-light w-50" type="submit" value="Sign in" name="sign-in">
            </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>