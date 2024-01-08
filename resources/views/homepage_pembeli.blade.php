<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/csss/style.css">
    
   
    <title>homepage</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="homepage.html">Sepakat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div  class="float-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Produk</a>
              <a class="nav-link" href="#">Wishlist</a>
              <a class="nav-link" href="#">about</a>
              <a class="nav-link" href="#">Contact Us</a>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            

                
                Hello ,{{ session()->get('email') }}
                  </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                 <li><a class="dropdown-item" href="{{url('account/'.session()->get('id'))}}">Account</a></li>
                 
                 <li><a class="dropdown-item" href="#">Log out</a></li>
                 </ul>
           </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- search -->
        <div class="container">
            <div class="row">
                <div class="col">
                        <div>
                            <h2>Produk</h2>
                        </div>
                </div> 
                

              <div class="col-md-4">
                <form action="/search" method="get">
                  <div class="input-group custom-search-form">
                    <input type="search" name="search" class="form-control" placeholder="search...">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                  </div>
                </form>


                {{-- <div class="col-md-4">
                  <div id='search-box'>
                    <form action='/search' id='search-form' method='get' target='_top'>
                    <input id='search-text' name='q' placeholder='Cari Produk Disini ...' type='text'/>
                    <button id='search-button' type='submit'><span>Search</span></button></form></div>                    
                </div> --}}
                <div class="col">
                    <div class="d-grid gap-2 d-md-block">
                                       
                          <a href="chat" class="notification">
                            <span>Chat</span>
                            <span class="badge">3++</span>
                           </a>
      </div>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            body {
              font-family: Arial, Helvetica, sans-serif;
            }
            
            .notification {
              background-color: #555;
              color: white;
              text-decoration: none;
              padding: 8px 16px;
              position: relative;
              display: inline-block;
              border-radius: 2px;
            }
            
            .notification:hover {
              background: red;
            }
            
            .notification .badge {
              position: absolute;
              top: -10px;
              right: -10px;
              padding: 5px 10px;
              border-radius: 50%;
              background-color: red;
              color: white;
            }
            </style>
            </head>
            <body>
            </body>
            </html>
        </div>
    </div>
        


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="Slide 2"aria-current="true"aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="Slide 3"aria-current="true"aria-label="Slide 3"></button>
  </div>
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/clay-banks-s-hw64ghWEA-unsplash.jpg" class="d-block w-100" alt="refresh">
      <div class="carousel-caption d-none d-md-block">
        <h5>Berbelanja</h5>
        <p>Temukan produk yang kamu inginkan disini</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/sayur.jpeg" class="d-block w-100" alt="refresh" width="200">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tawar</h5>
        <p>Produk dapat kamu tawar dengan harga yang lebih tinggi dari harga awal</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cabaii.jpeg" class="d-block w-100" alt="refresh">
      <div class="carousel-caption d-none d-md-block">
        <h5>Menangkan</h5>
        <p>Jadilah pemenang yang mendapatkan produk dengan harga tawar tertinggi</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<div class="container">
  <div class="row">
      <div class="col">
              <div>
                  <h4>Produk yang tersedia</h4>
              </div>
      </div> 
<br>
<!-- produk -->
<div class="container">
  <div class="row">
    <div class="col">
      @foreach($produk as $p)
      <div class="card" style="width: 18rem;">
        <img src="img/rachael-gorjestani-evsoUV1EyXY-unsplash.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <center> 
          <h5 class="card-title">{{$p->nama_produk}}</h5>
          <p class="card-text">Rp {{$p->harga_produk}}</p>
          <a href="/tambahWish/{{$p->id}}" class="btn btn-success">Tambah Wishlist</a><br>
          <div class="row">
            <div class="col">
              <a href="/detailProduk/{{$p->id}}" class="btn btn-primary">Detail</a>
            </div>
            <div class="col">
              <a href="/transaksi/{{$p->id}}" class="btn btn-primary">Tawar</a>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <a href="/editProduk/{{$p->id}}" class="btn btn-warning">Edit</a>
            </div>
            <div class="col">
              <a href="/hapusProduk/{{$p->id}}" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>      
      </div>
      @endforeach
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



  </div>
</div>

</body>
</html> 

