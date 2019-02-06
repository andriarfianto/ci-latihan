<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Form Validation</title>
</head>
<body>
    <h2>Pengenalan form validation</h2>
    <?php echo validation_errors(); ?>
    <!-- Mengarahkan ke Controller Form Method Aksi -->
    <?php echo form_open('form/aksi'); ?>
        <!-- Parameter pertama - Nama Form / name form -->
        <!-- Parameter kedua - Nama yang dikeluarkan saat validasi -->
        <!-- Parameter ketiga - Rules / aturan validasi -->
        <label for="Nama">Nama</label>
        <input type="text" name="nama"> <br> <br>
        <label for="Alamar">Alamat</label>
        <input type="text" name="alamat"><br> <br>
        <label for="Pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan"> <br> <br>
        <input type="submit" value="Simpan">
        <?php echo form_close(); ?>
</body>
</html>