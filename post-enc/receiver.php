<?php

$encodedData = json_decode(file_get_contents('php://input'), true);
echo "Server:\n";
print_r($encodedData);

$serData = urldecode(base64_decode($encodedData["base-data"]));
echo "Serialized JSON:\n";
print_r($serData);

$data = json_decode($serData);
echo "Array:\n";
print_r($data);