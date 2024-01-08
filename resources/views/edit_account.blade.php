<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <!--  CSS -->
     <style>
	        .jumbotron{
	     	background-color: #D7FFE1 
	       }
	</style>
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
			

		<!-- Jumbotron -->
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D7FFE1" fill-opacity="0.7" d="M0,128L18.5,154.7C36.9,181,74,235,111,245.3C147.7,256,185,224,222,181.3C258.5,139,295,85,332,96C369.2,107,406,181,443,218.7C480,256,517,256,554,218.7C590.8,181,628,107,665,117.3C701.5,128,738,224,775,272C812.3,320,849,320,886,272C923.1,224,960,128,997,106.7C1033.8,85,1071,139,1108,181.3C1144.6,224,1182,256,1218,224C1255.4,192,1292,96,1329,48C1366.2,0,1403,0,1422,0L1440,0L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg>
		<!-- End Jumbotron -->

        <!-- FORM Penambahan Data -->

		<div class="p-3">
		 <div class="row">
		   <div class="col-12">
			 <div class="row text-center">
				<h1> Mengedit Data Profile </h1> </div>
				   <form method="post" action="{{ url ('/edit_account')}} " enctype="multipart/form-data">
       
		{{csrf_field()}}
					
		<input type="text" name="id" hidden value="{{$account->id}}">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Masukkan nama </label>
				<input type="nama" class="form-control" name="name" value="{{$account->name}}" id="exampleInputnama" aria-describedby="namaHelp">
			</div>

                        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukkan Alamat </label>
                <input type="alamat" class="form-control"name="alamat" value="{{$account->alamat}}" id="exampleInputalamat" aria-describedby="alamatHelp">
			</div>
                           
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukkan Email </label>
                <input type="email" class="form-control"name="email"value="{{$account->email}}"id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
                        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukkan No.Telepon </label>
                <input type="no.telepon" class="form-control"name="no_telepon"value="{{$account->no_telepon}}" id="exampleno.telepon" aria-describedby="no.telepon">
            </div>	
					
			<div class="row">
			    <div class="col-6">
				  <div class="mb-3">
				    <label for="inputFoto" class="form-label">Tambahkan Foto</label>
				    <input type="file" class="form-control"name="foto" id="inputFoto" aria-describedby="fotoHelp">						
			</div>
				</div>
			      </div>
					 </div>
					    </div>
		
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D7FFE1" fill-opacity="0.7" d="M0,0L21.8,32C43.6,64,87,128,131,138.7C174.5,149,218,107,262,122.7C305.5,139,349,213,393,224C436.4,235,480,181,524,181.3C567.3,181,611,235,655,234.7C698.2,235,742,181,785,154.7C829.1,128,873,128,916,154.7C960,181,1004,235,1047,224C1090.9,213,1135,139,1178,133.3C1221.8,128,1265,192,1309,213.3C1352.7,235,1396,213,1418,202.7L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>					
			</form>
