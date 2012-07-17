<?php

$roomData = array(
    1 => array(
        'name' => 'Hut',
        'description' => 'You are in a hut.',
        'connections' => array(
            'south' => 3,
            'down' => 2
        )
    ),
    2 => array(
        'name' => 'Cellar',
        'description' => 'You are in a dark cellar.',
        'connections' => array(
            'up' => 1
        )
    ),
    3 => array(
        'name' => 'Forest',
        'description' => 'You are in a small forest.',
        'connections' => array(
            'north' => 1,
            'east' => 4
        )
    ),
    4 => array(
        'name' => 'Pub',
        'description' => 'You are in an Irish pub.',
        'connections' => array(
            'west' => 3
        )
    ),
);

