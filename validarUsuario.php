<?php

require 'autoload.php';

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

$usuario= $_POST["user"];
$pass=$_POST["password"];

try {
    $user = ParseUser::logIn($usuario, $pass);
    header('Location: views/index.php');
    //echo "Bienvenido";
} catch(ParseException $ex) {
    // error in $ex->getMessage();
    header('Location: index.html');
    
}

?>
