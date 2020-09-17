<?php
class settings {

function settings () {
	# 1. CSS instructions. No classes are implemented, instructions given only for 
	#    natural containers <a> and <td>.
	$this->css = "a  { font-family:arial; text-decoration:underline }
			   td { color:202020; font-family:arial; font-size:80% }";
	
	# 2. Chat refresh rate; seconds. You can easy set it smaller, but take care about traffic!
	$this->refresh = 10;
	
	# 3. How long a user will be visible on the right panel since 
	#    its last request, seconds.
	$this->still_alive = 30; 
	
	# 4. How long messages will be visible, seconds.
	$this->talk_during = 180;
	
	# 5. Colors & their notations for user's nicks. You can use hex code or 
	#    color name as key (in left), and anything as its notation (in right).
	$this->colors = array(black => 'black', 
				     navy => 'navy',  
				     red => 'red',
				     green => 'green',
				     blue => 'blue',
				     gray => 'gray',
				     orangered => 'orange red',
				     lightskyblue => 'light sky blue',
				     violet => 'violet',
				     darkcyan => 'dark cyan',
				     brown => 'brown',
				     darkkhaki => 'dark khaki',
				     darkviolet => 'dark violet',
				     deeppink => 'deep pink',
				     gold => 'gold',
				     limegreen => 'lime green',
				     lime => 'lime',
				     seagreen => 'sea green',
				     salmon => 'salmon',
				     coral => 'coral',
				     chocolate => 'chocolate',
				     fuchsia => 'fuchsia'
				     );
	
	# 6. Sets of labels of controls. 
	#    You can add your set  and define it as $this->labels_selected, or edit any of them:
	$this->labels = array(russian => array('ник', 'цвет', 'войти', 'сказать', 'нет записей за', 'в чате', 'никого'), 
				     english => array('nick', 'color', 'enter', 'say', 'no entries for last', 'in chat', 'nobody')
				     );
	$this->labels_selected = 'english';
	}
}
?>
