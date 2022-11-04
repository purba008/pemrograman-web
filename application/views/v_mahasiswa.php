<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
</head>
<style>
  th{
    text-align: center;
  }
  table{
    
  }
</style>
<body class="container">
<nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tugas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tambah Data</a>
        </li>
        
      </ul>
      <span class="navbar-text">
      2101060008
      </span>
    </div>
  </div>
</nav> <br>
<div class="alert alert-info" role="alert" >
 <h2  class="text-center">Wayan Purbayanti</h2>
</div>
<div class="card">
  <div class="card-body">
Data Mahasiswa
  </div>
</div> <br>
<table class="table table-bordered border-dark" >
<thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>Wayan Purbayanti</td>
      <td>2101060008</td>
      <td>Sumbawa Barat</td>
      <th>
      <input type="button"  value="Edit" class="btn btn-warning">
      <input type="button"  value="Delete" class="btn btn-danger">
      </th>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Suci</td>
      <td>2101060008</td>
      <td>Dompu</td>
      <th>
      <input type="button"  value="Edit" class="btn btn-warning">
      <input type="button"  value="Delete" class="btn btn-danger">
      </th>
    </tr>
      </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>