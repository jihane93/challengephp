<?php
$book_title = [
    'lîle au trésor'=>1883,
    'Catriona'=>1893,
    'la flèche noire'=>1883,
];
asort($book_title);
foreach ($book_title as $key =>$book_title){
    echo $book_title . ' ' . $key;
}

