<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <!-- CSS Bootstrap -->    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">    
    <!-- Style Bootstrap -->    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style.css'); ?>">    
</head>
<body>
    <div class="container">
        <div class="col-md-6 offset-md-3">
        <h1>Edit Product</h1>
            <form action="<?php echo site_url('product/update'); ?>" method="post">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="product_price" value="<?php echo $product_price; ?>">
                </div>
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <button type="submit" class="btn btn-primary pull-right">Update</button>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
    <!-- JS Bootstrap -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>