<?php

require_once 'Users.php';
require_once 'User.php';

// UserDb class
class UserDb
{
    // Database object
    private $_database;

    // Constructor
    public function __construct($database)
    {
        $this->_database = $database;
    }

    // Get user by name
    public function getByName($name)
    {
        $data = $this->_database->select("
            SELECT id, name, room
            FROM users
            WHERE name = '".$this->_database->escape($name)."'
        ");

        if (!empty($data))
        {
            return new User($data[0]['id'], $data[0]['name'], $data[0]['room']);
        }
        else
        {
            return false;
        }
    }

    // Get users in a room
    public function getByRoom($room)
    {
        $data = $this->_database->select("
            SELECT id, name, room
            FROM users
            WHERE room = ".intval($room)."
        ");

        $users = new Users();
        if (!empty($data))
        {
            foreach ($data as $key => $values)
            {
                $user = new User($values['id'], $values['name'], $values['room']);
                $users->addUser($user);
            }
        }

        return $users;
    }

    // Login a user
    public function login(User $user)
    {
        if ($user->getId())
        {
            return $user;
        }
        else
        {
            $this->insert($user);
            return $this->getByName($user->getName());
        }

    }

    public function insert(User $user)
    {
        return $this->_database->insert("
            INSERT INTO users
            (
                name,
                room
            )
            VALUES
            (
                '".$this->_database->escape($user->getName())."',
                ".intval($user->getRoom())."
            )
        ");
    }

    public function update(User $user)
    {
        return $this->_database->update("
            UPDATE users SET
                name = '".$this->_database->escape($user->getName())."',
                room = ".intval($user->getRoom())."
            WHERE id = ".intval($user->getId())."
        ");
    }
}
