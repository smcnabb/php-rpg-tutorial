<?php

require_once 'User.php';

// This is the only really useful builtin interface
class Users implements Iterator
{
    // Keeps track of the position while iterating
    private $_position;

    // Array of User objects
    private $_users;

    // Constructor
    public function __construct()
    {
        $this->_position = 0;
    }
    // Notice we can declare the type
    public function addUser(User $user)
    {
        $this->_users[] = $user;
    }

    // Iterator methods implemented
    function current() { return $this->_users[$this->_position]; }
    function next() { ++$this->_position; }
    function key() { return $this->_position; }
    function valid() { return isset($this->_users[$this->_position]); }
    function rewind() { $this->_position = 0; }
}