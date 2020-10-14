<?php
require('socket.php');
require('socketClient.php');

$socket = new socketClient('127.0.0.1', 54321);

$packet = array('controller'    => 'index',
				'action'	    => 'index',
				'subaction'	    => '',
				'subaction_id'  => '',
				'time'		    => time(),
				'ip'		    => $_SERVER['SERVER_ADDR'],
				);

$response = $socket->send(json_encode($packet));

$socket->report();
?>