<?php

// Chat class
class Chat
{
    // Member variables
    private $_id;
    private $_message;
    private $_userId;
    private $_userName;
    private $_timestamp;

    // Constructor
    public function __construct($id = null, $message = null, $userId = null, $userName = null, $timestamp = null)
    {
        $this->_id = $id;
        $this->_message = $message;
        $this->_userId = $userId;
        $this->_userName = $userName;
        $this->_timestamp = $timestamp;
    }

    // Setters
    public function setId($value) { $this->_id = $value; }
    public function setMessage($value) { $this->_message = $value; }
    public function setUserId($value) { $this->_userId = $value; }
    public function setUserName($value) { $this->_userName = $value; }
    public function setTimestamp($value) { $this->_timestamp = $value; }

    // Getters
    public function getId() { return $this->_id; }
    public function getMessage() { return $this->_message; }
    public function getUserId() { return $this->_userId; }
    public function getUserName() { return $this->_userName; }
    public function getTimestamp() { return $this->_timestamp; }
}
