<?php

	$SCRIPT_NAME = getenv('SCRIPT_NAME');
	$SERVER_NAME =  getenv('SERVER_NAME');
	$HTTP_REFERER = getenv('HTTP_REFERER');
	$SERVER_ADMIN = getenv('SERVER_ADMIN');
	$HTTP_ACCEPT_ENCODING = getenv('HTTP_ACCEPT_ENCODING');
	$HTTP_CONNECTION = getenv('HTTP_CONNECTION');
	$REQUEST_METHOD = getenv('REQUEST_METHOD');
	$HTTP_ACCEPT = getenv('HTTP_ACCEPT');
	$SCRIPT_URI = getenv('SCRIPT_URI');
	$SCRIPT_FILENAME = getenv('SCRIPT_FILENAME');
	$SERVER_SOFTWARE = getenv('SERVER_SOFTWARE');
	$QUERY_STRING = getenv('QUERY_STRING');
	$REMOTE_PORT = getenv('REMOTE_PORT');
	$HTTP_USER_AGENT = getenv('HTTP_USER_AGENT');
	$SERVER_PORT = getenv('SERVER_PORT');
	$SERVER_SIGNATURE = getenv('SERVER_SIGNATURE');
	$HTTP_CACHE_CONTROL = getenv('HTTP_CACHE_CONTROL');
	$HTTP_ACCEPT_LANGUAGE = getenv('HTTP_ACCEPT_LANGUAGE');
	$HTTP_COOKIE = getenv('HTTP_COOKIE');
	$REMOTE_ADDR = getenv('REMOTE_ADDR');
	$SERVER_PROTOCOL = getenv('SERVER_PROTOCOL');
	$PATH = getenv('PATH');
	$REQUEST_URI = getenv('REQUEST_URI');
	$GATEWAY_INTERFACE = getenv('GATEWAY_INTERFACE');
	$SCRIPT_URL = getenv('SCRIPT_URL');
	$SERVER_ADDR = getenv('SERVER_ADDR');
	$DOCUMENT_ROOT = getenv('DOCUMENT_ROOT');
	$HTTP_HOST = getenv('HTTP_HOST');

	$html = file_get_contents("env_display.html");
	eval("print \"" . addcslashes(preg_replace("/(---(.+?)---)/", "\\2", $html), '"') . "\";");

?>