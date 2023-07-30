<?php

// # Root Path
define('DIR_ROOT', __DIR__);

// # Return data from .uwu
function uwu($name) {
	return parse_ini_file('dist/.uwu')[$name];
}

// # Init
require_once("core/Main.php");
require_once("core/App.php");
require_once("core/helper/Post.php");

$main = new Main();