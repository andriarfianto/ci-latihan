<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <center>
            <h1>Edit data siswa</h1>
            <h3>Edit data</h3>
        </center>

        <?php foreach($siswa as $sis) {?>
        <form action="<?php echo base_url(). 'siswa/update'; ?>" method="post">
            <table class="table table-striped">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $sis->id ?>">
                        <input type="text" name="nama" value="<?php echo $sis->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $sis->alamat ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" value="<?php echo $sis->kelas ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Edit"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>    
</body>
</html>