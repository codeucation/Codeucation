<?php

$botToken = "227009484:AAHh0T2iW9X7U3jSjDYbzmeEqoqoo-OTKoY";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");
print_r($update);

?>
