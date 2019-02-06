<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CI Add Data User</title>
</head>
<body>
    <form method="post" action="<?php echo base_url('/users/add_user') ?>">
        <table width="400" border="0" cellpadding="5">
            <tr>
                <th width="213" align="right" scope="row">Enter your username</th>
                <td width="161"><input type="text" name="name" size="20" /></td>
            </tr>
            <tr>
                <th align="right" scope="row">Enter your email</th>
                <td><input type="text" name="email" size="20" /></td>
            </tr>
            <tr>
                <th align="right" scope="row">Enter your Mobile</th>
                <td><input type="text" name="mobile" size="20" /></td>
            </tr>
            <tr>
                <th align="right" scope="row">Enter Your Address</th>
                <td><textarea name="address" rows="5" cols="20"></textarea></td>
            </tr>
            <tr>
                <th align="right" scope="row">&nbsp;</th>
                <td><input type="submit" name="submit" value="Send" /></td>
            </tr>
        </table>
    </form>
</body>
</html>