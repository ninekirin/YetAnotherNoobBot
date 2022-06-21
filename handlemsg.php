<?php

// handlemsg.php

if ($sticker_premium) {
    // try to delete it
    deleteMessage($chat_id, $message_id);
}

if ($chat_type == "private" && in_array($sender_id, $admins, false)) {
    if ($sticker_premium) {
        sendMessage($chat_id, "This sticker is premium animation!", $message_id);
    }
    $message = file_get_contents('php://input');
    sendMessage($chat_id, $message, $message_id);
}

?>