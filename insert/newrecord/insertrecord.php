<?php
//prevent cross-site scripting(XSS)
//得到回傳
$district = htmlspecialchars($_POST["district"] ?? "", ENT_QUOTES);
$marketname = htmlspecialchars($_POST['marketname'] ?? "", ENT_QUOTES);
$localhost = ""



?>