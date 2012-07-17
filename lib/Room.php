<?php

// Class definition
class Room
{
    // Private and protected member variables
    // Private variables can only be access by this class, protected by inherited and parent classes
    // The underscore is a common standard but not a language constraint
    protected $_id;
    protected $_name;
    protected $_description;
    private $_connections;

    // Constructor
    public function __construct($id, $name, $description, $connections = array())
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_description = $description;
        $this->_connections = $connections;

        $this->_sortConnections();
    }

    // Private method
    private function _sortConnections()
    {
        asort($this->_connections);
    }

    // Setters
    public function setId($value) { $this->_id = $value; }
    public function setName($value) { $this->_name = $value; }
    public function setDescription($value) { $this->_description = $value; }
    public function setConnections($value) { $this->_connections = $value; asort($this->_connections); }

    // Getters
    public function getId() { return $this->_id; }
    public function getName() { return $this->_name; }
    public function getDescription() { return $this->_description; }
    public function getConnections() { return $this->_connections; }
}
