<?php
spl_autoload_register(function($className) {
	$file = $_SERVER["DOCUMENT_ROOT"].'/php_html_tags_lib_2020/libs/' . $className . '.class.php';
	if (file_exists($file)) {
		require_once $file;
	}
});