<?php
require_once __DIR__."/animal_filter.php";
$animals = fopen(__DIR__ . '\file\animal.txt', 'r');
$contents = '';
stream_filter_register('animal', 'animal_filter');
stream_filter_append($animals, "animal");

while(1)
{
  $line = fgets($animals);

  if (!$line)
  {
    break;
  }

  $contents .= $line;
}

fclose($animals);
echo $contents;