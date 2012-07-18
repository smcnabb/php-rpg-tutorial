<?php

include 'html/header.php';

require_once 'data/rooms.php';

?>

Rooms:
<ul>
    <?php foreach ($roomData as $room): ?>
        <li><?php echo $room['name']; ?></li>
    <?php endforeach; ?>
</ul>

Rooms:
<ul>
    <?php for ($i = 1; $i <= count($roomData); $i++): ?>
        <li><?php echo $roomData[$i]['name']; ?></li>
    <?php endfor; ?>
</ul>

<?php

include 'html/footer.php';

// TODO Change the foreach to output the description and connections for each room
