<?php


	$host = "naos.foonetic.net";

	$addr = gethostbyname($host);

	$port = 6697;
	$nick = "mrRoboto1";
	$ident = "mrRoboto1";
	$realname = "mrRoboto1";
	$channel = "#test";

	if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0)))
	{
		$errorcode = socket_lst_error();
		$errormsg = socket_strerror($errorcode);

		die("Couldn't create socket: [$errorcode] $errormsg \n");
	}

	echo "Socket created<br>\n";

	if(!socket_connect($sock, $addr, $port))
	{
		$errorcode = socket_last_error();
		$errormsg = socket_strerror($errorcode);

		die("Could not connect: [$errorcode] $errormsg \n");
	}

	echo "Connection established<br>\n";
	//echo fread($sock, 255);
	//fwrite($sock, "");

	?>