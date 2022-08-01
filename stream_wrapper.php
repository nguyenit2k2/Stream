<?php 
$protocol =  stream_get_wrappers();
foreach ($protocol as $protocol) {
    echo $protocol."<br>";
}
$memory = fopen('php://memory', 'rw');

for ($i = 0; $i < 10; $i++)
{
  $string = $i . "Text php://memory <br>";

  fputs($memory, $string);
}

rewind($memory);

while(1)
{
  $string = fgets($memory);

  if (!$string) {
    break;
  }

  echo $string;
}

fclose($memory);