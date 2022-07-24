<?php

$http_langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$langs = [];
foreach ($http_langs as $lang) {
  $langs[] = explode(';', $lang)[0];
}
var_export( $langs );

/*
array ( 0 => 'ja', )
*/