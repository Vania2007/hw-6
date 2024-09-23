<?php

$dictionary = [
    "energy" => "енергія",
    "car" => "автомобіль",
    "house" => ["будинок", "дім"],
    "book" => "книга",
    "photo" => "фото",
    "table" => ["стіл", "таблиця"],
    "train" => ["поїзд", "тренуватися"],
    "angry" => ["злий", "сердитий"],
];

$reverseDictionary = [];

foreach ($dictionary as $english => $ukrainian) {
    if (is_array($ukrainian)) {
        foreach ($ukrainian as $word) {
            $reverseDictionary[$word][] = $english;
        }
    } else {
        $reverseDictionary[$ukrainian][] = $english;
    }
}

print_r($reverseDictionary);
