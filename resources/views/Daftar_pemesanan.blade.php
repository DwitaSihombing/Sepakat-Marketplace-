<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="/csss/style.css">
    <link rel = "stylesheet" href="/csss/sidebar.css">
    <link rel = "stylesheet" href="/csss/table.css">
    </head>
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
						<a class="nav-link active" aria-current="page" href="#">About</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					  </li>
					</ul>
				  </div>
				</div>
			  </nav>
        <aside>
        
        <ul class="menu">
          <li> <a href="dashboard_penjual" class="aktif">Dashboard</a>
          </li>
        <li> <a href="add_produk">Tambah Produk</a> </li>
        <li> <a href="Melihat_produk"> Melihat Produk </a> </li> 
        <li> <a href="Daftar_pemesanan"> Daftar Pemesanan </a> </li>
                <br><br><br>
            <br><br><br><br><br>
            <br>  <br><br><br>
                   
        
        <li> <a href="index"> Keluar </a> </li>
        </ul> 
        </aside>

             <body>
                  <center>
                <h1>Daftar Pemesanan <span class="badge badge-secondary"></span></h1>
                <table class="tabel1">
                    <tr>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Nama Penawar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Opsi</th>
                        <th scope="col">Metode</th>
                        <th scope="col">Pemilihan</td>
                      </tr>
                

                      @foreach($penawaran as $p)


                      
                      <tr>

                        
                        <td> {{$p->nama_produk}} </td>
                        <td>{{$p->nama_penawar}}</td>
                        <td>{{$p->harga_tawar}}</td>
                        <td>{{$p->metode_pembayaran}} </td>
                        <td>{{$p->opsi_pengiriman}}</td>
                      <td>  <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                       </div>
                       </td>
                      </tr>
                      @endforeach
                      
                          </table>
                          </body>
                        </center>
                          </html>
    <p>
    <div class="d-grid gap-2 col-1 mx-auto">
    <a href="dashboard_penjual" class="btn btn-primary">Selesai</a>
       
        </div>