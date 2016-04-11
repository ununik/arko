<?php
$container = '<!DOCTYPE html>';
$container .= '<html>';
$container .= '<head>';

$container .= "<title>{$html->getTitle()}</title>";

$container .= '</head>';
$container .= '<body>';


$container .= "<div id='content'>{$html->getContent()}</div>";

$container .= '</body>';
$container .= '</html>';

return $container;