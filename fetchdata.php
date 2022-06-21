<?php

// fetchdata.php

$data = json_decode(file_get_contents('php://input'), true); //fetch input json
if ($data == false) { //check the json
    exit("tgapi raw json input error");
}

$sender_id = $data['message']['from']['id'];
$chat_id = $data['message']['chat']['id'];
$chat_type = $data['message']['chat']['type'];
$message_text = $data['message']['text'];
$message_id = $data['message']['message_id'];
$sticker_uniqueid = $data['message']['sticker']['file_unique_id'];
$message_type = $data['message']['entities'][0]['type'];
$sticker_premium = $data['message']['sticker']['premium_animation'];

?>