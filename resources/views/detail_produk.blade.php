<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
     <body>
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
    
      <div class="card" style="width: 85rem;">
      <div class="row g-0">
      <div class="col-md-4">
      <img src="img/fruits.jpeg" class="img-fluid rounded-start" alt="fruits">
      </div>
     <div class="col-md-6">
      <div class="card-body">
        <h2 class="card-title"> {{$produk->nama_produk}} </h2>
    </p>
        </p>
        <div class="container px-1,5">
            <div class="row gx-3">
              <div class="col-5">
               <div class="p-2 border bg-light">{{$produk->harga_produk}} </div>
            </div>
          </p>
            <div class="container px-1,5">
              <div class="row gx-3">
                <div class="col-5">
                 <div class="p-2 border bg-light">{{$produk->tanggal_awal}} </div>
              </div>
            </p>
              <div class="container px-1,5">
                <div class="row gx-3">
                  <div class="col-5">
                   <div class="p-2 border bg-light">{{$produk->tanggal_akhir}} </div>
                </div>
              </p>
              <div class="container px-1,5">
                <div class="row gx-3">
                  <div class="col-15">
                   <div class="p-2 border bg-light">{{$produk->detail_produk}}</div>
                </div>
				<br>
                </div>
              </div>
            </div>
          </div>

        <div class="container">
          <table class="table caption-top">
            
            <caption>List Penawar</caption>
            
            <thead>
              <tr>
                <th scope="col">#</th> 
               
                <th scope="col">Harga yang sudah ditawarkan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
               
                <td>Rp 45.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
               
                <td>Rp 60.000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                
                <td>Rp 50.000</td>
              </tr>
            </tbody>
          </table>
          <br>

              <div class="d-grid gap-1 col-3 mx-auto">
                <a href="homepage_pembeli" class="btn btn-primary">Selesai</a>
            </p>
        </div>