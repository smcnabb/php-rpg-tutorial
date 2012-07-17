<?php

// Basic array of strings
$rooms = array(
    'Hut',
    'Forest',
    'Pub'
);

echo 'Rooms:';
echo '<ul>';
foreach ($rooms as $key => $room)
{
    echo '<li>'.$room.' ('.$key.')</li>';
}
echo '</ul>';


// Associative array
$rooms = array(
    'hut' => 'Hut',
    'forest' => 'Forest',
    'pub' => 'Pub'
);

?>

<!-- We're now embedding PHP code within HTML -->
<p>You are in the <?php echo $rooms['pub']; ?></p>

<?php

// Nested associative array
$rooms = array(
    'hut' => array(
        'name' => 'Hut',
        'description' => 'A hut',
        'players' => 5
    ),
    'forest' => array(
        'name' => 'Forest',
        'description' => 'A forest',
        'players' => 0
    ),
    'pub' => array(
        'name' => 'Pub',
        'description' => 'A pub',
        'players' => 1000000
    )
);

?>

<p>You are in the <?php echo $rooms['pub']['name']; ?> along with
    <?php echo number_format($rooms['pub']['players']); ?> other people.</p>

<?php

// A nested mix of normal and associative arrays
$rooms = array(
    'hut' => array(
        'name' => 'Hut',
        'description' => 'A hut',
        'players' => array(
            'Jim'
        )
    ),
    'forest' => array(
        'name' => 'Forest',
        'description' => 'A forest',
        'players' => array(
            'Andrew',
            'Jon'
        )
    ),
    'pub' => array(
        'name' => 'Pub',
        'description' => 'A pub',
        'players' => array(
            'Steve',
            'Bono'
        )
    )
);

?>

<p>You are in the <?php echo $rooms['pub']['name']; ?> along with
    <?php echo implode(', ', $rooms['pub']['players']); ?></p>
