<?php

use Project\Helpers\Config;

require 'app/Config.php';

$config = new Config;

$config->load('config.php');

var_dump($config->exists('db.host'));
var_dump($config->get('db.host'));