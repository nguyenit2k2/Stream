<?php

$get_animals = fopen(__DIR__ . '\file\animal.txt', 'r');

$put_animals = fopen(__DIR__ . '\file\copy_animal.txt', 'w');

// while(1)
// {
//   $animal = fgets($get_animals);
//   if (!$get_animals)
//   {
//     break;
//   }
//   echo $animal."<br>";
// }

while(1)
{
  $animal = fgets($get_animals);
  if (!$get_animals)
  {
    break;
  }
  fputs($put_animals, $animal);
}
fclose($get_animals);
