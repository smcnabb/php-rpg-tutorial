<?php

require_once 'Chats.php';
require_once 'Chat.php';

// ChatDb class
class ChatDb
{
    // Database object
    private $_database;

    // Constructor
    public function __construct($database)
    {
        $this->_database = $database;
    }

    // Get latest chat
    public function getLatest($count = 10)
    {
        $data = $this->_database->select("
            SELECT chat.id, chat.message, chat.user_id, users.name, chat.created
            FROM chat
            LEFT JOIN users ON chat.user_id = users.id
            ORDER BY created DESC
            LIMIT 0, ".intval($count)."
        ");

        $chats = new Chats();
        if (!empty($data))
        {
            foreach ($data as $key => $values)
            {
                $chat = new Chat(
                    $values['id'],
                    $values['message'],
                    $values['user_id'],
                    $values['name'],
                    $values['created']
                );
                $chats->addChat($chat);
            }
        }

        return $chats;
    }

    // Insert chat
    public function insert(Chat $chat)
    {
        return $this->_database->insert("
            INSERT INTO chat
            (
                message,
                user_id,
                created
            )
            VALUES
            (
                '".$this->_database->escape($chat->getMessage())."',
                ".intval($chat->getUserId()).",
                '".date('Y-m-d H:i:s', $chat->getTimestamp())."'
            )
        ");
    }
}
