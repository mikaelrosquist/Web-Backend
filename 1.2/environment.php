<?php
	header('Content-type: text/plain');

	//Utskrift av omgivningsvariabler.
	echo "SCRIPT_NAME: ", getenv('SCRIPT_NAME'), "\n";
	echo "SERVER_NAME: ", getenv('SERVER_NAME'), "\n";
	echo "HTTP_REFERER: ", getenv('HTTP_REFERER'), "\n";
	echo "SERVER_ADMIN: ", getenv('SERVER_ADMIN'), "\n";
	echo "HTTP_ACCEPT_ENCODING: ", getenv('HTTP_ACCEPT_ENCODING'), "\n";
	echo "HTTP_CONNECTION: ", getenv('HTTP_CONNECTION'), "\n";
	echo "REQUEST_METHOD: ", getenv('REQUEST_METHOD'), "\n";
	echo "HTTP_ACCEPT: ", getenv('HTTP_ACCEPT'), "\n";
	echo "SCRIPT_URI: ", getenv('SCRIPT_URI'), "\n";
	echo "SCRIPT_FILENAME: ", getenv('SCRIPT_FILENAME'), "\n";
	echo "SERVER_SOFTWARE: ", getenv('SERVER_SOFTWARE'), "\n";
	echo "QUERY_STRING: ", getenv('QUERY_STRING'), "\n";
	echo "REMOTE_PORT: ", getenv('REMOTE_PORT'), "\n";
	echo "HTTP_USER_AGENT: ", getenv('HTTP_USER_AGENT'), "\n";
	echo "SERVER_PORT: ", getenv('SERVER_PORT'), "\n";
	echo "SERVER_SIGNATURE: ", getenv('SERVER_SIGNATURE'), "\n";
	echo "HTTP_CACHE_CONTROL: ", getenv('HTTP_CACHE_CONTROL'), "\n";
	echo "HTTP_ACCEPT_LANGUAGE: ", getenv('HTTP_ACCEPT_LANGUAGE'), "\n";
	echo "HTTP_COOKIE: ", getenv('HTTP_COOKIE'), "\n";
	echo "REMOTE_ADDR: ", getenv('REMOTE_ADDR'), "\n";
	echo "SERVER_PROTOCOL: ", getenv('SERVER_PROTOCOL'), "\n";
	echo "PATH: ", getenv('PATH'), "\n";
	echo "REQUEST_URI: ", getenv('REQUEST_URI'), "\n";
	echo "GATEWAY_INTERFACE: ", getenv('GATEWAY_INTERFACE'), "\n";
	echo "SCRIPT_URL: ", getenv('SCRIPT_URL'), "\n";
	echo "SERVER_ADDR: ", getenv('SERVER_ADDR'), "\n";
	echo "DOCUMENT_ROOT: ", getenv('DOCUMENT_ROOT'), "\n";
	echo "HTTP_HOST: ", getenv('HTTP_HOST'), "\n";
?>