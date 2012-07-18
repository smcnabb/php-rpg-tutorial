<?php

// Include a file
include 'html/header.php';

echo '<pre>';

// Uncomment to see it fail with only a warning
//include 'data/fail.php';

// Include a file only once. Uncomment second line to see it fail silently
include_once 'data/rooms.php';
// include_once 'data/rooms.php';

// Require a file
require_once 'lib/Room.php';
//require_once 'lib/Room.php';

// Uncomment to see it fail with a fatal error
//require 'data/fail.php';

echo var_export($roomData, true)."\n\n";

// Instantiate a room object
require_once 'lib/Rooms.php';
$rooms = new Rooms();
foreach ($roomData as $id => $room)
{
    $room = new Room($id, $room['name'], $room['description'], $room['connections']);
    $rooms->addRoom($room);
}

echo 'Rooms:';
echo '<ul>';
foreach ($rooms as $room)
{
    echo '<li>'.$room->getName().' - '.$room->getDescription().'</li>';
}
echo '</ul>';

echo '</pre>';

// Include a file
include 'html/footer.php';

// TODO ???
