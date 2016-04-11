<?php
namespace Library\Admin;

function safeText($text)
{
	return htmlspecialchars(addslashes($text));
}