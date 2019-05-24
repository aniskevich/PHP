<?php
define ("DIR", $_SERVER['DOCUMENT_ROOT']."/lesson6/");
require_once DIR."templates/header.php";
require_once DIR."public/auth-check.php";
require_once DIR."public/add-catalog-options.php";
require_once DIR."templates/add-catalog.php";
require_once DIR."public/catalog-layout.php";
require_once DIR."templates/catalog-layout.php";
require_once DIR."public/cart-layout.php";
require_once DIR."templates/cart-layout.php";
require_once DIR."templates/footer.php";