<?php
/*
|--------------------------------------------------------------------------
| Email
|--------------------------------------------------------------------------
|
| Email Preferences
|
*/
$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'smtp';
$config['smtp_host']    = 'ssl://smtp.gmail.com';
$config['smtp_port']    = '465';
$config['smtp_timeout'] = '7';
$config['smtp_user']    = 'myusername';
$config['smtp_pass']    = 'mypassword';
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 1000;
$config['mailtype'] = 'html';
$config['charset']    = 'utf-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'text'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not

