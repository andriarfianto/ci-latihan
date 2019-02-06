<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Codeigniter Database HMVC</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <center>Data Siswa</center>
        <center><?php echo anchor('siswa/tambah', 'Tambah Data'); ?></center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Kelas</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            <?php            
                $no = 1;
                foreach ($siswa as $sis) { 
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $sis->nama; ?></td>
                    <td><?php echo $sis->alamat; ?></td>
                    <td><?php echo $sis->kelas; ?></td>
                    <td>
                        <?php echo anchor('siswa/edit/' . $sis->id, 'Edit'); ?>
                        <?php echo anchor('siswa/hapus/' . $sis->id, 'Hapus'); ?>
                    </td>
                </tr>
            <?php $no++; }?>
            </tbody>
        </table>
    </div>    
</body>
</html>
