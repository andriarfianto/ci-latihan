<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product</title>
    <!-- CSS Bootstrap -->    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">    
    <!-- Style Bootstrap -->    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>">    
</head>
<body>
    <div class="container">
        <div class="col-md-6 offset-md-3">
        <h1>Add New Product</h1>
            <form action="<?php echo site_url('product/save'); ?>" method="post">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="product_price" placeholder="Price">
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
    <!-- JS Bootstrap -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>