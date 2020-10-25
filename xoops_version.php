<?php

$modversion['name'] = _MI_HOMEWORLD_NAME;
$modversion['version'] = 0.01;
$modversion['description'] = _MI_HOMEWORLD_DESC;
$modversion['credits'] = 'tricrosian.com';
$modversion['help'] = 'tricrosian.html';
$modversion['license'] = 'tricrosian.com';
$modversion['official'] = 0;
$modversion['image'] = 'images/homeworld_slogo.png';
$modversion['dirname'] = 'homeworld';

// Menu
$modversion['hasMain'] = 1;
$modversion['hasAdmin'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = 'homeworld.php';
$modversion['blocks'][1]['name'] = _MI_HOMEWORLD_BNAME1;
$modversion['blocks'][1]['description'] = 'Shows the homeworld in a block, width=120';
$modversion['blocks'][1]['show_func'] = 'b_homeworld_show';
