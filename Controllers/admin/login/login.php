<?php
$html->setTitle('Login | ADMIN');

$login = new Login();

if (isset($_POST['login'])) {
	$login->checkLogin($_POST['login']);
	$login->checkPassword($_POST['password']);
}

$html->addToContent(include '/Views/admin/login/form.php');