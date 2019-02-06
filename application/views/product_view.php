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
        <h1><center><?php echo $title; ?></center></h1>
        <div class="row pull-right">
            <div class="col-md-12">
                <a href="<?php echo site_url('product/add_new'); ?>" class="btn btn-md btn-warning">Add Product</a>                                
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                foreach ($products->result() as $product) {
            ?>
                <tr>
                    <td scope="row"><?php echo $i; ?></td>
                    <td><?php echo $product->product_name; ?></td>
                    <td><?php echo number_format($product->product_price); ?></td>
                    <td>
                        <a href="<?php echo site_url('product/get_edit/'.$product->product_id); ?>" class="btn btn-sm btn-info">Update</a>                
                        <a href="<?php echo site_url('product/delete/'.$product->product_id); ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>                                                
            <?php $i++; } ?>
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
    <!-- JS Bootstrap -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>