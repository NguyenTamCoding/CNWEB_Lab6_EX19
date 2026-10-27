<?php
// Get the document root
$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Get the application path dynamically and safely
$uri = $_SERVER['REQUEST_URI'];
$dirs = explode('/', $uri);


$app_path = '/';
if (isset($dirs[1]) && $dirs[1] !== '') {
    $app_path = '/' . $dirs[1] . '/';
}

// Set the include path
set_include_path($doc_root . $app_path);
?>