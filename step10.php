<?php

// TODO Lots!!!

require_once 'config.php';

// Get the room data from an include for the moment
require_once 'data/rooms.php';

// We only need class definitions once
require_once 'lib/Database.php';
require_once 'lib/User.php';
require_once 'lib/Users.php';
require_once 'lib/UserDb.php';
require_once 'lib/Room.php';
require_once 'lib/Rooms.php';
require_once 'lib/Chat.php';
require_once 'lib/Chats.php';
require_once 'lib/ChatDb.php';

// Connect to the database
$database = new Database(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// See if the user is logging in
// TODO
// Check if the login form has been posted
// Create a User object with the username provided
// Add the user to the database
// Set a cookie 'codefoorpgname' with the username
// Redirect them back to this page e.g. header('Location: step10.php'); exit;

// Check if the user has logged in before
// TODO
// Check if the 'codefoorpgname' cookie is set
// Create a user object from the database

// Get all the rooms
// TODO
// Get all the rooms

// Header
include 'html/header.php';

// Check if we need to log the user in
if ($user == null)
{
    include 'html/login.php';
}
// If not show them the current room
else
{
    // Check if the user is moving room
    // TODO
    // Check if a room query string value has been passsed in
    // If so set the room on the user object and update the database

    // Check if the user has entered a chat message
    // TODO
    // Check if the chat form has been posted
    // If so then create a chat object with the message, user ID, username and timestamp
    // Insert it in to the database

    // Get the current room
    // TODO
    // Get the current room

    // Get the users in this room
    // TODO
    // Get the list of users in the current room

    // Get the chat
    // TODO
    // Get the last 10 chat messages

    // Render the room template
    include 'html/room.php';
}

// Footer
include 'html/footer.php';
