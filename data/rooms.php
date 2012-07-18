<?php

$roomData = array(
    1 => array(
        'name' => 'Hut',
        'description' => 'You are in a small hut. It is made entirely out of wooden blocks and has a grass floor. You can hear a hissing outside.',
        'connections' => array(
            'south' => 3,
            'down' => 2
        )
    ),
    2 => array(
        'name' => 'Cellar',
        'description' => 'You are in a dark cellar. There\'s a wooden torch on the wall and a deep hole in the center of the room, with what looks like lava at the bottom.',
        'connections' => array(
            'up' => 1
        )
    ),
    3 => array(
        'name' => 'Forest',
        'description' => 'You are in a forest. You are totally surrounded by spiders, skeletons, zombies and friendly looking green things.',
        'connections' => array(
            'north' => 1,
            'east' => 4
        )
    ),
    4 => array(
        'name' => 'Pub',
        'description' => 'You are in an Irish pub. U2 are playing on the stage and there\'s a leprechaun drinking a pint of Guiness at the bar.',
        'connections' => array(
            'west' => 3
        )
    ),
);

