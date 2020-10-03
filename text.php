<?php
require_once "twilio/vendor/autoload.php";
require_once "twilio/twilio-php-main/src/Twilio/autoload.php";
use Twilio\Rest\Client;
function SendWhatsappMessage($entityData){
	$adb = PearDatabase::getInstance();
	$wsId   	= $entityData->get('assigned_user_id');
	$parts 		= explode('x', $wsId);
	echo "<p>This is the discription in text php page</p>";