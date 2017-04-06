<?php
	require 'vendor/autoload.php';
	$dataStorate = new \SkypeBot\Storage\FileStorage("folder");
	$config = new \SkypeBot\Config(
		'd60336c4-982e-4a11-94ec-b14eed0c9059',
		'BLreEhKHGhQNbva5ZHhOS1D'
	);
	$conversation_id = null;
	$bot = \SkypeBot\SkypeBot::init($config, $dataStorate);
	$bot->getNotificationListener()->setMessageHandler(function($payload){
			$conversation_id = $payload->getConversation()->getId();
			error_log("Conversation ID: ".$conversation_id." - ".date('Y-m-d H:i:s')." \n", 3, "folder/my-errors.log");
			file_put_contents('folder/conversation_id.txt', $payload->getConversation()->getId());
			$bot->getApiClient()->call(
				new \SkypeBot\Command\SendMessage(
					'Hello World.',
					$conversation_id
				)
			);
		}
	);
	error_log("Antes de entrar al responder"." - ".date('Y-m-d H:i:s')."\n", 3, "folder/my-errors.log");
	$bot->getApiClient()->call(
		new \SkypeBot\Command\SendMessage(
			'Hello World.',
        	$conversation_id
		)
	);
	error_log("Despues del responder"." - ".date('Y-m-d H:i:s')."\n", 3, "folder/my-errors.log");
?>