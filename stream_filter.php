<?php

$filter = stream_get_filters();

foreach ($filter as $filter) {
    echo $filter."<br>";
}

$animals = fopen(__DIR__ . '\file\animal.txt', 'r');

stream_filter_append($animals, 'string.toupper');

while(1)
{
  $animal = fgets($animals);
  if (!$animals)
  {
    break;
  }
  echo $animal."<br>";
}