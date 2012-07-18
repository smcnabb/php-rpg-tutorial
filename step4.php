<?php

$rooms = array(
    1 => 'Hut',
    2 => 'Forest',
    3 => 'Pub'
);

// Useful debugging function
var_dump($rooms);

// Function declaration with optional argument
function sortRooms($rooms, $direction = 0)
{
    if ($direction == 0)
    {
        arsort($rooms);
    }
    else
    {
        asort($rooms);
    }

    return $rooms;
}

// var_export with a true argument return a string rather than outputting the result
echo '<p>Descending: '.var_export(sortRooms($rooms), true).'</p>';
echo '<p>Ascending: '.var_export(sortRooms($rooms, 1), true).'</p>';

// Class definition
class Room
{
    // Member variables
    private $_id;
    protected $_name;

    // Constructor
    public function __construct($id = null, $name = null)
    {
        $this->_id = $id;
        $this->_name = $name;
    }

    // Setters
    public function setId($value) { $this->_id = $value; }
    public function setName($value) { $this->_name = $value; }

    // Getters
    public function getId() { return $this->_id; }
    public function getName() { return $this->_name; }
}

// Object instantiation
$room = new Room(3, 'Pub');

// Access public methods and variables on the object using arrow (->)
echo '<p>You are in the '.$room->getName().'</p>';

// TODO Add a new connections array member variable to the object, along with getters and setters
// When the connections array gets set, sort the connections using a private method


