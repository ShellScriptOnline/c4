<?php
require_once("settings.php");

class common extends settings {

	function common($id = "dscufhurehcuwehufdhreufyheuihcurehcrueyhcucnewruchru") {
		session_id($id);
		session_start();
		$this->settings();
	}

	function head ($refresh = "") {
	
		if ($refresh) {
			$refresh_rate = $refresh * 1000;
			$refresh_html = "			
			<script>
				function refreshFrame() {
					document.location.reload();
				}
				
				setTimeout('refreshFrame()'," . $refresh_rate . ");
			</script>";
		}
		
		$this->head .= "<!-- (c) CreatiffLive Chat | by Artem Mikhailov | http://artemmikhailov.com  -->
		
		<html><head>
		<style>";
		
		$this->head .= $this->css;
		
		$this->head .= "</style>
		$refresh_html
		<script>
		function send_chat () {
		with (document.forms['say']) {
			submit();
			elements['message'].value='';
			elements['message'].focus();
			}
		}
		
		function nick(nick) {
		with (window.parent.chat_bot.document.forms['say'].elements['message']) {
			value=nick+': ';
			focus();
			}
		}
		</script></head>";
		return $this->head;
	}
	
	function to_time () {
		if ($_SESSION['chat_message'][0][unixtime] + $this->talk_during < time()
		    and
		    $_SESSION['chat_message']) {
			array_shift($_SESSION['chat_message']);
			$this->to_time();
		}
		else
			return 1;
	}
}

?>