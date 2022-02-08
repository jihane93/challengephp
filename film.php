<?php
$film = [
    'black arrow' => ['Benedict taylor', 'georgia slow'],
    'le club du suicide' => ['oleg dahl','donatas banionis'],
    'la planete au trésor' => ['martin short','emma thompson'],
];

foreach($film as $key => $values){
    echo "in movie $key, the principal actors are:/n";
    foreach ($values as $actors){
        echo $actors . " , ";
    }
    echo "/n";
}