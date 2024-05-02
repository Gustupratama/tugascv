<?php
$clientData = array(
    "name" => "ida bagus putu meisa pratama putra",
    "email" => "gustupratama123@gmail.com",
    "phone" => "085-792-795-516",
    "address" => "Penyabangan"
);

$jsonData = json_encode($clientData);

$fileName = "client_input.json";
file_put_contents($fileName, $jsonData);

echo "Client input data array has been generated and saved to client_input.json.";

