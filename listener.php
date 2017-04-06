<?php
	require 'vendor/autoload.php';
	$dataStorate = new \SkypeBot\Storage\FileStorage("folder");
	$config = new \SkypeBot\Config(
		'd60336c4-982e-4a11-94ec-b14eed0c9059',
		'BLreEhKHGhQNbva5ZHhOS1D'
	);
	$conversation_id = null;
	$bot = \SkypeBot\SkypeBot::init($config, $dataStorate);
	$bot->getNotificationListener()->setMessageHandler(function($payload) use (&$conversation_id) {
			$conversation_id = $payload->getConversation()->getId();
			var_dump($conversation_id);
			var_dump("\n");
			var_dump($payload);
			var_dump("\n");
			var_dump($payload->getConversation());
			var_dump("\n");
			var_dump($payload->getConversation()->getId());
			file_put_contents(
				'folder/conversation_id.txt',
				$payload->getConversation()->getId()
			);
		}
	);
	$bot->getApiClient()->call(
		new \SkypeBot\Command\SendMessage(
			'Hello World.',
        	$conversation_id
		)
	);
?>