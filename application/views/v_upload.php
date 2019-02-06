<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    <h2>Upload file menggunakan codeigniter</h2>
    <?php echo $error; ?>
    <?php echo form_open_multipart('upload/aksi_upload'); ?>
    <input type="file" name="berkas">
    <br> <br>
    <input type="submit" value="upload">
</body>
</html>