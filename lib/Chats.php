<?php

require_once 'Chat.php';

class Chats implements Iterator
{
    // Keeps track of the position while iterating
    private $_position;

    // Array of chat objects
    private $_chats;

    // Constructor
    public function __construct()
    {
        $this->_position = 0;
    }

    // Add chat object
    public function addChat(Chat $chat)
    {
        $this->_chats[] = $chat;
    }

    // Iterator methods implemented
    function current() { return $this->_chats[$this->_position]; }
    function next() { ++$this->_position; }
    function key() { return $this->_position; }
    function valid() { return isset($this->_chats[$this->_position]); }
    function rewind() { $this->_position = 0; }
}