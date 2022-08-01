<?php
$opts = [
  'https'=> [
    'method'=>"GET"
  ]
];

$default = stream_context_get_default($opts);

readfile('https://www.theguardian.com');

