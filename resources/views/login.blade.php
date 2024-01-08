<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/csss/style.css">
    
    <title>Sepakat</title>
</head>
<body>
@if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sepakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- body -->
      <header id="background">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Log In</h5>
                  <form method= "post" action= "ceklogin.php">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <label for="Role">Pilih Role :</label>
                    <select id = "Role" name="Role">
                      <option value="Admin">Admin</option>
                      <option value="Penjual">Penjual</option>
                      <option value="Pembeli">Pembeli</option>
                    </select><br><br>
      
                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                      <label class="form-check-label" for="rememberPasswordCheck">
                        Remember password
                      </label>
                    </div>
                    <div class="d-grid">
                      <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Log in</button>
                       </div>
                    <hr>
                    
                    <a href="registration" class="text-center">Register</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </header>
    
      <!-- footer -->
      <footer class="text-center bg-light fixed-bottom">
        <div class="container p-2"></div>
        <div class="text-center p-3">
          © 2021 Copyright: PPW SI
        </div>
      </footer>
</body>
</html>