<?php

$response = service('response');

$response->setHeader('Content-Type', 'application/json; charset=UTF-8');

echo json_encode(['code' => 0, 'data' => $output]);
