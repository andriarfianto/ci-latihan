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
    <h2>Upload file</h2>
    <ul>
        <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>