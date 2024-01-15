<?php
session_start();
use App\RMVC\App as App;

require_once "../vendor/autoload.php";
require_once "../routes/web.php";
App::run();