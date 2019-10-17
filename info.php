<?php
// Show all information, defaults to INFO_ALL

echo "priyanka test";


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info1@prepworks.com";
    $to   = "priyanka.deshpande@fulcrumdigital.com";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    $headers .= "Reply-To: $to";
    var_dump(mail($to,$subject,$message,$headers));




?>
