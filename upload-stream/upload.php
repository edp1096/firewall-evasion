<?php
// CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Accept, X-Custom-Header, Upgrade-Insecure-Requests");


$json = file_get_contents('php://input');
$fileData = json_decode($json, true);
$fileContent = base64_decode($fileData["content"]);

// print_r($fileData);

file_put_contents("./data/" . $fileData["name"], $fileContent);


$result = array(
    "status" => "done",
    "type" => $fileData["type"],
    "name" => $fileData["name"]
);

echo json_encode($result);
