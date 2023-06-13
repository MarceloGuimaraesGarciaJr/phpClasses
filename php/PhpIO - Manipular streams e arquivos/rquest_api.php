<?php
$json = file_get_contents('https://swapi.dev/api/people/1');
$file = json_decode($json,false);
$homeworld = file_get_contents($file->homeworld);
$responseHome = json_decode($homeworld);

echo "Name:{$file->name}, Year of Birth: {$file->birth_year}, Gender:{$file->gender}, Homewolrd:{$responseHome->name} ";