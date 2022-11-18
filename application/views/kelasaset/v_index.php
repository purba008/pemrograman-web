<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasController</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
  .td a{
    text-align: center;
  }
 
</style>
<body>
   <div class="container">
   <div class="alert alert-info" role="alert" >
 <h2  class="text-center">Data Aset</h2>
</div>
  <a href="<?=site_url('Aset/tambah')?>"  class="mb-3 float-end btn btn-success "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
  </svg> Add Data
  </a>
 <br>
    <table class="table table-bordered border-dark">
        <thead>
            <tr >
                <th>ID</th>
                <th>Nama Aset</th>
                <th>Jenis</th>
                <th>Lokasi</th>
                <th>Jumlah</th>
                <th>Aksi</th>  
            </tr>
        </thead>
        <tbody>
            <?php 
            $id = 1;
            foreach ($isi as $item) {
                # code...
            ?>

            <tr>
                <td><?php echo $id++ ?></td>
                <td><?php echo $item->nama_aset;?></td>
                <td><?php echo $item->jenis;?></td>
                <td><?php echo $item->lokasi;?></td>
                <td><?php echo $item->jumlah;?></td>
                <td>
                <a href="<?=site_url('Aset/edit/' . $item->id)?>"
                  class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?=site_url('Aset/hapus/' . $item->id)?>" 
                  class="btn btn-danger btn-sm">Delete</a>
                 
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
   </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>