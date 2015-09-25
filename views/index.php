<?php
require '..\autoload.php';

use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;

// Init parse: app_id, rest_key, master_key
ParseClient::initialize('AJdtZ04rcN4fWLJmSPjDJgwmj9EmhaV61e8ekLYK', '7AEkhdAoqiFZew0VpkekQGkdCTKMHNzgYe2m6n9i', 'R7B9VLMzvC1bOUrwjuvcXkoaUmE0LBrIdkN35LIG');

$query = new ParseQuery("TestObject1");
try {
  $gameScore = $query->get("qBmc5VP1Wk");
  // The object was retrieved successfully.
} catch (ParseException $ex) {
  // The object was not retrieved successfully.
  // error is a ParseException with an error code and message.
}
$objectId = $gameScore->getObjectId();

$updatedAt = $gameScore->getUpdatedAt();
$updateDate = $updatedAt->format('d/m/Y h:i:s');

$createdAt = $gameScore->getCreatedAt();
$score = $gameScore->get("perro");
echo $score . '<br/>';

echo $objectId . '<br/>';

echo $updateDate . '<br/>';

//echo $createdAt . '<br/>';

$query = new ParseQuery("TestObject1");
$query->limit(10);
$results = $query->find();
foreach ( $results as $result ) {
  // echo user Usernames
    echo $result->get('perro') . '<br/>';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>