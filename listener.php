<?php
	require 'vendor/autoload.php';
	$dataStorate = new \SkypeBot\Storage\FileStorage(sys_get_temp_dir());
	$config = new \SkypeBot\Config(
	    'YOUR SKYPE BOT ID',
	    'YOUR SKYPE BOT SECRET'
	);

	$bot = \SkypeBot\SkypeBot::init($config, $dataStorate);
	$bot->getNotificationListener()->setMessageHandler(
    function($payload) {
	        file_put_contents(
	            sys_get_temp_dir() . '/conversation_id.txt',
	            $payload->getConversation()->getId();
	        );
	    }
	);
	$bot->getApiClient()->call(
    new \SkypeBot\Command\SendMessage(
        'Hello World.',
        'Your conversation id'
    )
);
?>