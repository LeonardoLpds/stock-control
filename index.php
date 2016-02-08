<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once(__DIR__.'/lib/autoload.php');
include_once(__DIR__.'/stock-control-config.php');

new app\controller\Controller();