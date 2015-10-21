<?php 
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'intim_phpmysql');
define('DB_HOST', 'localhost');

define('ROOT_DIR', dirname(dirname(__FILE__)));
define('DS', DIRECTORY_SEPARATOR);
define('UPLOAD_DIR_NAME', 'upload');
define('UPLOAD_DIR', ROOT_DIR . DS . UPLOAD_DIR_NAME);

define('APP_URL', 'http://localhost/trainings/BOOTSTRAP');
define('UPLOAD_URL', APP_URL . '/' . UPLOAD_DIR_NAME);
