<?php
define ("DIR", $_SERVER['DOCUMENT_ROOT']."/lesson6/");
require_once DIR."templates/header.php";
require_once DIR."public/auth-check.php";
require_once DIR."public/checkout.php";
require_once DIR."templates/checkout.php";
require_once DIR."templates/footer.php";