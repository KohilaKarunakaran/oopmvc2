<?php
require_once("signupConfig.php");
$data = new signupConfig();
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['edit'])){
    $data->setfirstName($_POST['firstname']);
    $data->setlastName($_POST['lastname']);
    $data->setAddress($_POST['address']);

    echo $data->update();
    echo "<script>alert('data updated successfully');document.location='allData.php'</script>";
}
$record = $data->fetchOne();
$val=$record[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple registration form</title>
</head>
<body>
    <h3>Edit file</h3>
    <div>
        <form action="" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $val['firstName'];?>"/>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" value="<?php echo $val['lastName'];?>"/>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo $val['address'];?>"/>
            <input type="submit" value="update" name="edit"/>
</form>
</div>
</body>
</html>