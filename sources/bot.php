<?php
require_once("common.php");
$common_class = new common();

if ($_GET[color]) {
	$nick = $_GET[nick] or $nick = "nobody";
	setcookie("creatifflive_nick", $nick);
	setcookie("creatifflive_color", $_GET[color]);
	header("Location: bot.php");
}
else {
	print $common_class->head();
	if ($_COOKIE[creatifflive_nick]) {
	print "<table>
		<form action=add.php target=chat_top name=say onsubmit='send_chat();return false;'>
		<tr>
		<td><font color=$_COOKIE[creatifflive_color]>$_COOKIE[creatifflive_nick]</font></td>
		<td><input name=message size=43></td>
		<td><input type=submit value=" . $common_class->labels[$common_class->labels_selected][3] . "></td>
		</tr>
		</form></table>";
	}
	else { 
	print "<table><form>
		<tr><td>" . $common_class->labels[$common_class->labels_selected][0] . "</td>
		<td><input size=10 name=nick></td>
		<td>" . $common_class->labels[$common_class->labels_selected][1] . "</td><td>
		<select name=color>";
		foreach ($common_class->colors as $key => $value) { 
			print "<option value=$key style='color:$key'>$value</option>";
		}
	print "</select>
		</td><td>
		<input type=submit value=" . $common_class->labels[$common_class->labels_selected][2] . "></td>
		</tr></form></table>";
	}
}
?>