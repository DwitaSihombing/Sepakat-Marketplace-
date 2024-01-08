<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Hasil Pencarian</title> 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
    <div class="container">
        <h1>Hasil Pencarian</h1>

        <div id='search-box'>
        <form action='/search' id='search-form' method='get' target='_top'>
        <input id='search-text' name='q' placeholder='Cari Produk Disini ...' type='text'/>
        <a href="search.html" class="btn btn-primary">Search</a>
</div>
<P>

</P>
<!-- produk -->
<div class="container">
    <p>Berikut kami tampilkan produk yang anda cari</p>
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/rachael-gorjestani-evsoUV1EyXY-unsplash.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <center> 
            <h5 class="card-title">Rempah Rempah</h5>
            <p class="card-text">Rp. 15,000.-</p>
            <div class="row">
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Detail</a>
              </div>
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Tawar</a>
                
              </div>
            </div>
          </div>      
        </div>
        <br><br>
        <div class="card" style="width: 18rem;">
          <img src="img/sayurmayur.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
          <center>
            <h5 class="card-title">Sayur</h5>
            <p class="card-text">RP 20.000.-</p>
            <div class="row">
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Detail</a>
              </div>
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Tawar</a>
              </div>
            </div>
          </div>      
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/cabaii.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center>
            <h5 class="card-title">Cabai</h5>
            <p class="card-text">Rp 23.000.-</p>
            <div class="row">
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Detail</a>
              </div>
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Tawar</a>
              </div>
            </div>
          </div>      
        </div>
        <br><br>
        <div class="card" style="width: 18rem;">
          <img src="img/tomatt.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center>
            <h5 class="card-title">Tomat</h5>
            <p class="card-text">26.000.-</p>
            <div class="row">
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Detail</a>
              </div>
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Tawar</a>
              </div>
            </div>
          </div>      
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="img/wortel.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center>
            <h5 class="card-title">Wortel</h5>
            <p class="card-text">Rp 17.000.-</p>
            <div class="row">
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Detail</a>
              </div>
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Tawar</a>
              </div>
            </div>
          </div>      
        </div>
        <br><br>
        <div class="card" style="width: 18rem;">
          <img src="img/jagung.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <center>
            <h5 class="card-title">Jagung</h5>
            <p class="card-text">Rp 25.000.-</p>
            <div class="row">
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Detail</a>
              </div>
              <div class="col">
                <a href="detail_produk.html" class="btn btn-primary">Tawar</a>
              </div>
            </div>
          </div>      
        </div>
      </div>
    </div>
</div>


  </body>
</html>