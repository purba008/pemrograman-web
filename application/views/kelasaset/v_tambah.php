<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ddiv, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="alert alert-info" role="alert" >
 <h2  class="text-center">Data Aset</h2>
</div>

    <form action="<?=site_url('Aset/proses_tambah')?>"  method="post">

<div class="mb-3">
    <label for="">Nama Aset</label>
    <input type="text" name="txt_nama_aset" class="form-control">
</div>

<div class="mb-3">
    <label for="">Jenis Aset</label>
    <input type="text" name="txt_jenis" class="form-control">
</div>

 <div class="mb-3">
    <label for="">Lokasi Aset</label>
    <input type="text" name="txt_lokasi" class="form-control">
 </div>

<div class="mb-3">
    <label for="">Jumlah Aset</label>
    <input type="number" name="txt_jumlah" class="form-control">
</div>

    <input type="submit" name="submit" value="Save" class="btn btn-primary">
    <a href="<?=site_url('Aset/index');?>" class=" btn btn-warning">Cancel</a>
    
    </form>
    </div>
</body>
</html>