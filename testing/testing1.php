<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="顯示詩句"> <br><br>
        <?php if(!isset($_POST['Send'])) {?>
        <input type="hidden" name="Send" value="TRUE"></form>
    <?php } else 
    echo file_get_contents("database/data/data.json");
    ?>
</body>
</html>