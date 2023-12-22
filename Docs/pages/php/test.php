<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . './../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mailer = new PHPMailer();
echo 'Test script executed successfully.';
