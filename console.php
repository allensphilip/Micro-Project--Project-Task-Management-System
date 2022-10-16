<?php

require 'vendor\autoload.php';
require 'vendor\bdk\debug\src\Debug\Autoloader.php';		// If installed via composer

// If not using composer uncomment the next 3 lines
// require 'path-to/src/Debug/Autoloader.php';
// $autoloader = new \bdk\Debug\Autoloader();
// $autoloader->register();

$debug = new \bdk\Debug(array(
	'collect' => true,
	'output' => true,
));

$debug->log('debugger loaded');
?>
