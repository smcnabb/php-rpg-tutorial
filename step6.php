<?php

include 'html/header.php';

// Get the room data from an include for the moment
require_once 'data/rooms.php';

// We only need class definitions once
require_once 'lib/Room.php';
require_once 'lib/Rooms.php';

// Instantiate a room object
$rooms = new Rooms();
foreach ($roomData as $id => $room)
{
    $room = new Room($id, $room['name'], $room['description'], $room['connections']);
    $rooms->addRoom($room);
}

?>

Rooms:
<ul>
    <?php foreach ($rooms as $room): ?>
        <li><?php echo $room->getName(); ?> - <?php echo $room->getDescription(); ?></li>
    <?php endforeach; ?>
</ul>

<?php

include 'html/footer.php';
