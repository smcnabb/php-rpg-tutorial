<?php

// User class
class User
{
    // Member variables
    private $_id;
    private $_name;
    private $_room;

    // Constructor
    public function __construct($id = null, $name = null, $room = null)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_room = $room;
    }

    // Setters
    public function setId($value) { $this->_id = $value; }
    public function setName($value) { $this->_name = $value; }
    public function setRoom($value) { $this->_room = $value; }

    // Getters
    public function getId() { return $this->_id; }
    public function getName() { return $this->_name; }
    public function getRoom() { return $this->_room; }
}
