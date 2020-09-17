<?php
require_once("common.php");
$common_class = new common();
$_GET[message] = preg_replace('/([^\s]+\@[^\s]+)/', '<a style="color:' . $_COOKIE[creatifflive_color] . '" href=mailto:\\1>\\1</a>', $_GET[message]);
$_GET[message] = preg_replace('/(http:\/\/[^\s]+)/', '<a target=_new style="color:' . $_COOKIE[creatifflive_color] . '" href=\\1>\\1</a>', $_GET[message]);
$_SESSION['chat_message'][] = array (date => date('H:i:s'), 
						    nick => $_COOKIE[creatifflive_nick],
						    color => $_COOKIE[creatifflive_color],
						    message => stripcslashes ($_GET[message]),
						    ip => $_ENV[ip],
						    unixtime => time());
header ("Location: top.php");

