<?php
    $hostname="localhost";
    $db = "test";
    $Username = "root";
    $Password = "";

    $conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);
    if(isset($_POST['submit'])){
        $country_name = $_POST['country_name'];
        $sql = $conn->prepare("Insert Into Tblcountry (country_name)
        values (:country_name) ");
        $conn->beginTransaction();
        $sql->execute(array(':country_name'=>$country_name));
        echo "<h2>Country Added Successfully ..!</h2>";
        $conn->commit();
    }

    $conn->null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label>Please Select Country</label>
    <select name="country_name">
        <option>---Country---</option>
        <option value="NewZeland">NewZeland</option>
        <option value="Japan">Japan</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Africa">Africa</option>
        <option value="Nepal">Nepal</option>
        <option value="Korea">Korea</option>
    </select>
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>