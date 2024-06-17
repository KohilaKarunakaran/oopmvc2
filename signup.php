<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Fill out the information</h3>
    <div>
        <form action="signupProcess.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.."/>
<label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.."/>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Your Address"/>
            <input type="submit" value="save" name="save"/>
</form>
</div>
</body>
</html>