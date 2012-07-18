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

echo '<p>You are in the '.$rooms['pub'].'</p>';

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

echo '<p>You are in the '.$rooms['pub']['name'].' along with '.
    number_format($rooms['pub']['players']).' other people.</p>';

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

// Switch statement
foreach ($rooms as $key => $room)
{
    switch ($key)
    {
        case 'hut':
            echo '<p>HUT</p>';
            break;
        case 'forest':
            echo '<p>TREES</p>';
            break;
        case 'pub':
            echo '<p>DRINK!</p>';
            break;
        default:
            echo '<p>FAIL!</p>';

    }
}

// TODO Change the room data to have an array of connections to other rooms rather than players
// The keys in the array should be directions e.g. north, south, east, west, and the values should
// be the keys of the connected room e.g. forest.
// Output each room along with the connection information

