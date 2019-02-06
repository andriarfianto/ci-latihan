<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="javascript">
        function show_confirm(act, gotoid) {
            if (act=='edit') {
                var r=confirm('Do you really want to edit?');
            } else {
                var r=confirm('Do you really want to delete?');
                if (r==true) {
                    window.location="<?php echo base_url(''); ?>/users/"+act+"/"+gotoid;
                }
            }
        }
    </script>
    <title>CI Crud</title>
</head>
<body>
    <h2>Simple Crud Application</h2>
    <a href="<?php echo base_url('/users/form_add'); ?>">Add User</a>
    <table width="600" border="1" cellpadding="5">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user->id; ?></td>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->mobile; ?></td>
                <td><?php echo $user->address; ?></td>
                <td width="40" align="left">
                    <a href="#" onclick="show_confirm('edit', <?php echo $user->id; ?>)">Edit</a>
                </td>
                <td width="40" align="left">
                    <a href="#" onclick="show_confirm('delete', <?php echo $user->id; ?>)">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>