<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><?php echo $content; ?></h1>
                <p class="lead">Diskripsi content website</p>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lexie</td>
                    <td>Schuster</td>
                    <td>Marianbury</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Dino</td>
                    <td>Kreiger</td>
                    <td>Travonfort</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Elva</td>
                    <td>Grant</td>
                    <td>Mariannamouth</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
    <!-- JS Bootstrap -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>