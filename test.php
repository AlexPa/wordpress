<?php
error_reporting(E_ALL);

$headers  = "From: balumba.site <mail@balumba.site>\n";
$headers .= "Cc: balumba.site <mail@balumba.site>\n";
$headers .= "X-Sender: balumba.site <mail@balumba.site>\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: mail@balumba.site\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\n";

$res = mail('a_l_e_x_1@inbox.ru', 'Theme', 'Message', $headers);

var_dump($res);
