<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$response = array(
  'type' => 'users',
  'data' => array(
    array(
      'id' => 1,
      'name' => 'John'
    ),
    array(
      'id' => 2,
      'name' => 'Jane'
    ),
    array(
      'id' => 3,
      'name' => 'Bob'
    ),
    array(
      'id' => 4,
      'name' => 'Alice'
    )
  )
);

echo json_encode($response);
