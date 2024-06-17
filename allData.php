<?php
require_once("signupConfig.php");
$data = new signupConfig();
$all = $data->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alla data</title>
    <link rel ="stylesheet" href="table.css">
</head>
<body>
    <h2>List of all records</h2>
        <center>
            <a class = "btn btn-success" href="signup.php">add New</a>
            <br>
</center>
<br>
<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>action</th>
</tr>

<?php
foreach($all as $key => $val) {
?>

<tr>
    <td><?=$val['firstName']?></td>
    <td><?=$val['lastName']?></td>
    <td><?=$val['address']?></td>
    <td><a class="btn btn-danger" href="delete.php?id=<?=$val['id']?>&req=delete">DELETE</a><a class="btn btn-warning" href="edit.php?id=<?=$val['id']?>">EDIT</a></td>
</tr>
<?php

}
?>
</table>
</body>
</html>