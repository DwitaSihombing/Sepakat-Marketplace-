<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <style>
   body {
    
    background-image: url('https://images.pexels.com/photos/1414651/pexels-photo-1414651.jpeg?cs=srgb&dl=pexels-adonyi-g%C3%A1bor-1414651.jpg&fm=jpg');
    height: 92vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
    
  }
 </style>

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
    <!--transaksi-->  
    <p>
    <center>
   
      <div class="card border-success" style="width: 42rem;">
      <div class="card-body">
      <div class="col-md-4">
           <img src="img/fruits.jpeg" class="img-fluid rounded-start" alt="fruits">
      </div>
           <h3 class="card-text"><td > {{$penawaran->nama_produk}} </h3>
           <h4 class="card-text">  Rp {{$penawaran->harga_produk}}  </h4>
     </div>
           <div class="text-left p-4"> 
             <form method="post" action="{{ url ('/transaksi/tawar')}}" class="row g-2">   
        {{csrf_field()}}
             <div class="col-md-6"></div>

               <input type="text" hidden name="nama_produk" value="{{$penawaran->nama_produk}}">
                 <label for="Metode Pembayaran">Metode Pembayaran</label>
                    <select id = "metode_pembayaran" name="metode_pembayaran">
                      <option value="Indomaret">Indomaret</option>
                      <option value="Alfamidi">Alfamidi</option>
                      <option value="Alfamart">Alfamart</option>
                      <option value="COD">COD</option>
                    </select><br><br>

                  <label for="Opsi Pengiriman">Opsi Pengiriman</label>
                    <select id = "opsi_pengiriman" name="opsi_pengiriman">
                      <option value="jNE">JNE</option>
                      <option value="Sicepat">Sicepat</option>
                      <option value="J&T">J&T</option>
                    </select><br><br>
                      
            <h5> Masukkan Harga Tawar : </h5>
            <div class="form-text text-info">📢 Pastikan harga tawar anda lebih tinggi dari harga awal produk</div>
     <center>
       
            <input type="Harga Tawar" class="col-sm-4" id="floatingInput" name= "harga_tawar" placeholder=" Rp 20.000">
            </div>      
            <br>
            <div class="d-grid gap-1 col-2 mx-auto">
            <input type="Submit" class="btn btn-primary" value="Konfirmasi">
              <br></div>
              </form> 
            </div>
          </div>
        </div>
      </body>
  </html>