<?php
/* * * * * * * * * * * * * * * * * * * * * *
 * Include before header for any new pages *
 * * * * * * * * * * * * * * * * * * * * * *
*/

// Allow local dev, kill HTTPS
$LOCAL_DEV = False;
if($_SERVER['HTTP_HOST'] == 'dm:8888'){
    $LOCAL_DEV = True;
}

// If the HTTPS is not found to be "on"
if((!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") & !$LOCAL_DEV) {
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    //Prevent the rest of the script from executing.
    exit;
}