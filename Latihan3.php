<?php
    // $customers = [
    //     ["Emilia Ruth", "00213", "Fashion Store", "Waiting"],
    //     ["James Black", "00214", "Watch Store", "Inline"],
    //     ["Zach Nolan", "00215", "Drug Store", "Waiting"]
    // ]

    $customers = [
    [
        "name" => "Jean Rough", 
        "address" => "Rouen",
        "number" => "0087900",
        "status" => "Waiting",
    ],
    [
        "name" => "Andrew North", 
        "address" => "Lyon",
        "number" => "0087901",
        "status" => "Service",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>
    <h1>List customer</h1>
    <?php foreach( $customers as $customer ) : ?>
    <ul>
        <li>Name : <?= $customer["name"]; ?></li>
        <li>Address : <?=  $customer["address"]; ?></li>
        <li>Number : <?= $customer["number"]; ?></li>
        <li>Status : <?= $customer["status"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>