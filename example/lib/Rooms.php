<?php

require_once 'Room.php';

// This is the only really useful builtin interface
class Rooms implements Iterator
{
    // Keeps track of the position while iterating
    private $_position;

    // Array of Room objects
    private $_rooms;

    // Constructor
    public function __construct()
    {
        $this->_position = 0;
    }
    // Notice we can declare the type
    public function addRoom(Room $room)
    {
        $this->_rooms[$room->getId()] = $room;
    }

    public function getRoom($id)
    {
        foreach ($this->_rooms as $room)
        {
            if ($room->getId() == $id)
            {
                return $room;
            }
        }

        return false;
    }

    // Iterator methods implemented
    function current() { return $this->_rooms[$this->_position]; }
    function next() { ++$this->_position; }
    function key() { return $this->_position; }
    function valid() { return isset($this->_rooms[$this->_position]); }
    function rewind() { $this->_position = 0; }
}