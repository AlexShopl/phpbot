//Команды "Умного одногруппника"
<?php
include 'files/img.php';

function raspisan($chat_id){
	sendPhoto($chat_id, FILE_RASP); 	
	//sendMessage($chat_id, $chat_id);
	}

function spisokgr($chat_id){
	sendTxt($chat_id, FILE_GRUPPA);
}

?>
