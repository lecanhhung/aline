<?php

/* 
 * Config SMTP
 *  if change this config you can change another config in front/agencysendemail.php in function index 
 */


$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
$config['smtp_port'] = '465';
$config['smtp_user'] = 'bang.webdeveloper@gmail.com';
$config['smtp_pass'] = 'dvigqjtaiirqzshr';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard

//pre($config); 

//$this->email->initialize($config);


