<!DOCTYPE html>
<html lang="en">
    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="./css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <script src="./css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/required.js"></script>
<!--compulsorypartend-->
<!--PasswordValidation-->
<!--form start-->
<form action="" method="post">
<!--username-->
<!--input username-->
Username : <input type="text" class="form-control" name="username" required id="username" placeholder="Username">
<!--input password-->
Password : <input type="password" required id="password" class="form-control" name="password"  placeholder="Password">
<!--resetbuttonstart-->
<button class="btn btn-danger" type="button reset" name="reset">Reset</button>
<!--resetbuttonend-->
<!--submitbuttonstart-->
<button class="btn btn-success" type="button submit" name="submit">Submit</button>
<!--submitbuttonend-->
<!--formend-->
</form>
<input type="checkbox" name="seepassword" onClick="turnpasswordvisible();"> Turn the password visible <br>
<!--Connect to the database start-->

<!--Connect to the database end-->
</body>
</html>