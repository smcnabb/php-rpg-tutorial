<?php

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
$database = new Database('dbmediaoysterdevmaster.sfdev.colo.ignops.com', 'smcnabb', 'mo7V3Sx4', 'code_foo_rpg');

// See if the user is logging in
$userDb = new UserDb($database);
$user = null;
if (isset($_POST['name']))
{
    $user = new User(null, trim($_POST['name']), 1);
    $userDb->insert($user);
    $userDb->getByName($user->getName());

    setcookie('codefoorpgname', $user->getName(), time() + (365 * 24 * 60 * 60), '/', 'smcnabb.dev.v.ign.com');

    header('Location: index.php');
    exit;
}
// Or has logged in before
elseif (isset($_COOKIE['codefoorpgname']))
{
    $user = $userDb->getByName($_COOKIE['codefoorpgname']);
}

// Get all the rooms
$rooms = new Rooms();
foreach ($roomData as $id => $room)
{
    $room = new Room($id, $room['name'], $room['description'], $room['connections']);
    $rooms->addRoom($room);
}

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
    if (isset($_GET['room']))
    {
        $user->setRoom($_GET['room']);
        $userDb->update($user);
    }

    // Check if the user has entered a chat message
    $chatDb = new ChatDb($database);
    if (isset($_POST['chat']))
    {
        $chat = new Chat(null, trim($_POST['chat']), $user->getId(), $user->getName(), time());
        $chatDb->insert($chat);
    }

    // Get the current room
    $room = $rooms->getRoom($user->getRoom());

    // Get the users in this room
    $users = $userDb->getByRoom($room->getId());

    // Get the chat
    $chats = $chatDb->getLatest(10);

    // Render the room template
    include 'html/room.php';
}

// Footer
include 'html/footer.php';
