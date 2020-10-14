<?php
require('socket.php');
require('socketServer.php');

new socketServer("0.0.0.0", 54321);
?>