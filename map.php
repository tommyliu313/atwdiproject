<!DOCTYPE html>
<html lang="en">


    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="static/css/own.css"></link>
    <script src="static/js/jqueryown.js"></script>

    
    <title>Public Market - Search Page</title>
    
</head>
<body>
    <script type="text/javascript" src="static/js/ajaxxhr.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="static/js/jquery-3.6.1.min.js"></script>
    <script src="static/js/jqueryown.js"></script>
    <script src="static/js/validation.js"></script>
    <script src="static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
<!--message-->
    <!--navbarstart-->
    <?php include('component/navbar.php'); ?>
    <!--navbarend-->
    <div class="mt-4 p-5 bg-secondary text-black rounded">
  <h1>Map</h1></div>
<!--Select Column-->
    <table class="table table-info">
        <tr colspan="2">
            <td>Address Input</td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Enter your address"></td>
            <td><button oncilck=""></button></td>
        </tr>
    </table>
    <iframe width="100%" height="500" src="https://maps.google.com/maps?=q=<?php echo $address; ?>&output=embed"></iframe>
    </body>
    </html>