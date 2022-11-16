<?php
require('vendor/autoload.php');

$param = [
    "template" => ["paper" => "A4"],
    "context" => [
        "hello" => [
            "new" => "Tx",
            "value" => "Hello, World!",
            "rect" => [100, 700, 400, 750]
        ]
    ]
];

$reports = FieldReports\Bridge::create_proxy();
$fp = fopen($argv[1], 'w');
fwrite($fp, $reports->render($param));
?>
