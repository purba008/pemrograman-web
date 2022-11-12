<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KelasController</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>Kelas</th>
                <th>Isi</th>
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
                <td><?php echo $item->fakultas;?></td>
                <td><?php echo $item->prodi;?></td>
                <td><?php echo $item->kelas;?></td>
                <td><?php echo $item->isi;?></td>
                <td></td>
            </tr>
            <?php 
             }
             ?>
        </tbody>
    </table>

   </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>