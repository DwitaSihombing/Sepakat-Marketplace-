<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="/csss/style.css">
    <link rel = "stylesheet" href="/csss/sidebar.css">
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

		<!-- FORM penambahan data -->
		<div class="p-3">
			<div class="row">
				<div class="col-12">
					<h3>MENAMBAHKAN PRODUK</h3>
	
					<form method="post" href="/updateProduk/{{$produk->id}}" enctype="multipart/form-data" >
					@csrf
					<div class="mb-3">
							<label for="nama_produk">Masukkan nama produk</label>
							<textarea class="form-control" name="nama_produk" value="{{$produk->nama_produk}}" id="deskripsi" style="height: 10px"></textarea>
							<div class="form-text text-danger">pesan kesalahan</div>
						</div>
						<div class="mb-3">
							<label for="nama_produk">Masukkan harga produk</label>
							<textarea class="form-control" value="{{$produk->harga_produk}}" name="harga_produk" id="deskripsi" style="height: 10px">{{$produk->harga_produk}}</textarea>
							<div class="form-text text-danger">pesan kesalahan</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="mb-3">
									<label for="inputTanggalAwal" class="form-label">Masukkan tanggal awal</label>
									<input type="date" class="form-control" value="{{$produk->tanggal_awal}}" name="tanggal_awal" id="inputTanggalAwal" aria-describedby="tanggalAwalHelp">
									<div id="tanggalAwalHelp" class="form-text text-danger">pesan kesalahan</div>
								</div>
							</div>
							<div class="col-6">
								<div class="mb-3">
									<label for="inputTanggalAkhir" class="form-label">Masukkan tanggal akhir</label>
									<input type="date" class="form-control" value="{{$produk->tanggal_akhir}}" name="tanggal_akhir" id="inputTanggalAkhir" aria-describedby="tanggalAkhirHelp">
									<div id="tanggalAkhirHelp" class="form-text text-danger">pesan kesalahan</div>
								</div>
							</div>
						</div>
	
	
						<div class="mb-3">
							<label for="deskripsi">Masukkan deskripsi</label>
							<textarea class="form-control" value="{{$produk->desripsi}}" name="deskripsi" id="deskripsi" style="height: 100px">{{$produk->deskripsi}}</textarea>
							<div class="form-text text-danger">pesan kesalahan</div>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="mb-3">
									<label for="inputFoto" class="form-label">Tambahkan Foto</label>
									<input type="file" name="foto" value="{{$produk->foto}}" class="form-control" id="inputFoto" aria-describedby="fotoHelp">
									<div id="fotoHelp" class="form-text text-danger">pesan kesalahan</div>
								</div>
							</div> 
							<div class="col-6">
								<div class="mb-3">
									<label for="" class="form-label">Tipe produk</label>
									<select name="tipe_produk" class="form-select" value="{{$produk->tipe_produk}}">
										<option value="sayur">Sayur</option>
										<option value="buah">Buah</option>
										<option value="rempah">Rempah</option>
									</select>
									<div class="form-text text-danger">pesan kesalahan</div>
								</div>
							</div>
						</div>
		  				
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Submit</button>
							
						</div>
	
					
					  </form>
				</div>
			</div>
		</div>

	</body>
</html>