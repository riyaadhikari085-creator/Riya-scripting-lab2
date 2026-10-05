<?php

$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => '98454545',
    'website' => 'www.ram.com'
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Information Table</title>
</head>

<body>

<table border="1" cellpadding="8">

    <tr>
        <th>Name</th>
        <td><?php echo $info['name']; ?></td>
    </tr>

    <tr>
        <th>Address</th>
        <td><?php echo $info['address']; ?></td>
    </tr>

    <tr>
        <th>Email</th>
        <td><?php echo $info['email']; ?></td>
    </tr>

    <tr>
        <th>Phone</th>
        <td><?php echo $info['phone']; ?></td>
    </tr>

    <tr>
        <th>Website</th>
        <td><?php echo $info['website']; ?></td>
    </tr>

</table>

</body>
</html>