<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Test</title>
    ead>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    require_once 'mailchimp/vendor/autoload.php';
function vtMailChimpAddSubscriber($entityData){
	$adb = PearDatabase::getInstance();
	$wsId   	= $entityData->get('assigned_user_id');
	$parts 		= explode('x', $wsId);
	$entityId 	= $parts[1];
	$recordId = $entityData->getId();
    $recordId = explode('x', $recordId);;
    $recordId = $recordId[1];
</head>
<body>
   <p>This is for testing</p> 
    <p>
    	this is for modification in the 
    </p>
</body>
</html>