<?php
	require 'vendor/autoload.php';
	
	$conversation_id = null;
	$bot = \SkypeBot\SkypeBot::init($config, $dataStorate);
	$bot->getNotificationListener()->setMessageHandler(function($payload){
			$conversation_id = $payload->getConversation()->getId();
			file_put_contents('folder/conversation_id.txt',$payload->getConversation()->getId());
		}
	);
	$bot->getApiClient()->call(
		new \SkypeBot\Command\SendMessage(
			'Hello World.',
        	$conversation_id
		)
	);
?>