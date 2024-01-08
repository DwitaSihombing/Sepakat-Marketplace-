<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/csss/style.css">
    
    <title>Homepage Sepakat</title>
</head>
<body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Sepakat</a> -->
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

  <div class="container banner d-flex align-items-center">
    <div class="row">
        <div class="col-md-6 col-sm-1">
            <h1 class="font-weight-bold">SEPAKAT MARKETPLACE HASIL TANI</h1>
            <p align="justify">
              Website yang bisa digunakan untuk melakukan pelelangan hasil tani, dimana seller bisa mendapatkan harga yang lebih tinggi dibandingkan menjual di pasar biasa. Website ini bisa digunakan oleh seller yang sudah melakukan pendaftaran pada website, dan menambahkan produk yang akan dijual dengan menampilkan harga awal. Pembeli akan menawar produk ke harga yang lebih tinggi, agar bisa mendapatkan produk tersebut. Seller kemudian akan memfilter pemenang, dimana penawar dengan harga tertinggi yang berhak memenangkan produk dan langsung melakukan pembayaran.
            </p>
                <a href="login"><button class="btn btn-primary shadow p-3 mb-5 rounded">Mulai</button></a>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src={{ asset('img/logo.jpg') }} alt="logo">
        </div>
    </div>
  </div>
</div>
    </html>
    