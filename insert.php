<?php
//prevent cross-site scripting(XSS)
$district = htmlspecialchars($_POST["district"] ?? "", ENT_QUOTES);
$marketname = htmlspecialchars($_POST['marketname'] ?? "", ENT_QUOTES);
$localhost = ""



?>