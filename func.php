<?php

// func.php

function sendPhoto($chat_id, $photo, $reply_to_message_id) {
    $message = urlencode($message);
    $url = "https://api.telegram.org/bot" . token . "/sendPhoto?chat_id=$chat_id&photo=$photo&reply_to_message_id=$reply_to_message_id&parse_mode=HTML";
    $header = [""];
    return get($url, $header);
}

function sendMessage($chat_id, $message, $reply_to_message_id) {
    $message = urlencode($message);
    $url = "https://api.telegram.org/bot" . token . "/sendMessage?chat_id=$chat_id&text=$message&reply_to_message_id=$reply_to_message_id&parse_mode=HTML";
    $header = [""];
    return get($url, $header);
}

function forwardMessage($chat_id, $message_id) {
    $url = "https://api.telegram.org/bot" . token . "/deleteMessage?chat_id=$chat_id&message_id=$message_id";
    $header = [""];
    return get($url, $header);
}

function deleteMessage($chat_id, $message, $reply_to_message_id) {
    $message = urlencode($message);
    $url = "https://api.telegram.org/bot" . token . "/sendMessage?chat_id=$chat_id&text=$message&reply_to_message_id=$reply_to_message_id&parse_mode=HTML";
    $header = [""];
    return get($url, $header);
}

function sendSticker($chat_id, $sticker, $reply_to_message_id) {
    $sticker = urlencode($sticker);
    $url = "https://api.telegram.org/bot" . token . "/sendSticker?chat_id=$chat_id&sticker=$sticker&reply_to_message_id=$reply_to_message_id";
    $header = [""];
    return get($url, $header);
}

function setCurl(&$ch, array $header) {
    $a = curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $b = curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $c = curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $d = curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    return ($a && $b && $c && $d);
}

function post(string $url, $data, array $header) {
    $ch = curl_init($url);
    setCurl($ch, $header);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function get(string $url, array $header) {
    $ch = curl_init($url);
    setCurl($ch, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function dlFile($file_url, $save_to)
{
 $content = file_get_contents($file_url);
 file_put_contents($save_to, $content);
}

?>