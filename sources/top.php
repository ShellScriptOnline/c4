<?php
require_once("common.php");
$common_class = new common();
print $common_class->head($common_class->refresh);

print "<body>
	<table cellspacing=0 cellpadding=0 width=100%>
	<tr>
	<td valign=top width=100%>
	<table cellspacing=0>"; 
	
if (sizeof($_SESSION['chat_message'])) {
	$common_class->to_time();
	foreach ($_SESSION['chat_message'] as $key => $message) {
		print "<tr valign=top><td>$message[date]</td>
			<td><font color=$message[color]>
			<a style='color:$message[color]' 
			href='javascript:nick(\"$message[nick]\")'>$message[nick]</a>: 
			$message[message]</font></td></tr>";
	}
}	
else 
	print "<tr><td>" . $common_class->labels[$common_class->labels_selected][4] . " " . $common_class->talk_during . " sec. </td></tr>";
		
print "</table>
	</td>
	<td>
	<table>
	<tr><td bgcolor=gray>
	<table cellpadding=0 bgcolor=white cellspacing=1>
	<tr><td><nobr>" . $common_class->labels[$common_class->labels_selected][5] . "</nobr></td></tr>";

if ($_COOKIE[creatifflive_color]) {
	$nick = "<font color=" . $_COOKIE[creatifflive_color] . ">" . $_COOKIE[creatifflive_nick] . "</font>";
	$_SESSION['chat_user'][$nick] = time();
}

if (sizeof($_SESSION['chat_user'])) {
	foreach ($_SESSION['chat_user'] as $nick => $time) {
		if ($time + $common_class->still_alive < time())
			unset($_SESSION['chat_user'][$nick]);
		print "<tr><td><nobr>" . $nick . "</nobr></td></tr>";	
	}
}
else
	print "<tr><td>" . $common_class->labels[$common_class->labels_selected][6] . "</td></tr>";

print "</table></td></tr></table>
	</td></tr></table>
	<script>
	location.href = '#bottom';
	</script>
	<a name='bottom'></a>
	</body></html>";
?>