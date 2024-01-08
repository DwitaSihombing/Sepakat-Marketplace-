<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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


              <style>
                body, h1, h2, p, a,td, span {
                    font-family: Arial, Helvetica, sans-serif;
                    text-decoration: none;
                }
                .wrap {
                    background-color:rgba(255, 255, 255, 0.7);
                    width: 800px;
                    color:black;
                    margin: 20px auto;
                    padding:15px;
                }
                .icon {
                    padding:5px;
                    text-align: center;
                }
                span {
                    color: maroon;
                }
            </style>

<body style="background: url(liu.JPG);background-size: cover;background-attachment: fixed;">
    <div class="wrap">
         <table>
         
         <h3>PROFIL</h3>
            <tr>

           
                <td rowspan="8" width="100px"> <img src="{{asset('/img/'.$account->foto)}}" width="200px" style="display: block;border-radius: 5%;border-color:white;margin-right:30px" border="2px" ></td>
            </tr>
            <tr>
            
                <td><b>Nama </b></td>
                <td>:</td> <td>{{$account->name}} </td>
            </tr>
            <tr>
                <td><b>Alamat</b></td><td>:</td> <td>{{$account->alamat}}</td>
            </tr>
            <tr>
                <tr>
                    <td><b>Email </b></td><td>:</td> <td> {{$account->email}}</td>
                </tr>
                
            <tr>
                <td><b>No.Telepon</b></td><td>:</td> <td>{{$account->no_telepon}}</td>
            </tr>
            
        </table>
    </div>

    <div class="d-grid gap-2 col-1 mx-auto">
        
        <a href="{{url('account/edit/'. $account->id)}}" class="btn btn-primary">Edit</a>
        
      </div>
