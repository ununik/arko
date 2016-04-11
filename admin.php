<?php
include '/Configuration/DatabaseConfig.php';
include '/Models/Library/Admin.php';
function __autoload($className)
{
	include_once '/Models/Classes/' . $className . '.class.php';
}

session_start();

$html = new HTML();
$html->setTitle('ADMIN');

if (!isset($_SESSION['admin_arko'])) {
	include '/Controllers/admin/login/login.php';
} else {
	
}

print include '/Views/page.php';