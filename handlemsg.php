<?php

// handlemsg.php

if ($premium_animation) {
    // try to delete it
    $result = deleteMessage($chat_id, $message_id);
    sendMessage($chat_id, $result, $message_id);
}

if ($chat_type == "private" && in_array($sender_id, $admins, false)) {
    if ($premium_animation) {
        sendMessage($chat_id, "This sticker is premium animation!", $message_id);
    }
    $message = file_get_contents('php://input');
    sendMessage($chat_id, $message, $message_id);
}

?>