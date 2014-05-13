<?php

require 'indeed-api.php';

$indeedAPI = new IndeedAPI(5469512572356078);
$indeedAPI->setDefaultParams( array(
  'co' => 'gb'
) );

// Pass a basic query
$output = $indeedAPI->query('web developer');
print_r($output);

// Pass in more options
$output = $indeedAPI->query(array(
    'q' => 'web developer',
    'l' => 'London',
    'start' => 10,
    'limit' => 3
));
print_r($output);

?>