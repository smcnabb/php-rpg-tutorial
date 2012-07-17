<?php

include 'html/header.php';

// We only need class definitions once
require_once 'lib/Room.php';

// Instantiate a room object
$room = new Room(1, 'Pub', 'A pub');

// Methods on the object are accessed using the arrow (->)
$name = $room->getName();

?>

<p>You are in the <?php echo $name; ?></p>

<?php

include 'html/footer.php';
