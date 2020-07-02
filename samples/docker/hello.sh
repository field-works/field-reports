#!/bin/bash

HOST=${1:-localhost}
PORT=${2:-50080}
OUTPUT=${3:-out.pdf}

curl --request POST "http://$HOST:$PORT/render" \
--header 'Content-Type: application/json' \
--data '{
    "template": {"paper": "A4"},
    "context": {
        "hello_1": {
            "new": "Tx",
            "value": "Hello, World!",
            "rect": [100, 700, 400, 750],
            "font": "/Times-Roman"
        },
        "hello_2": {
            "new": "Tx",
            "value": "Hello, World!",
            "rect": [100, 600, 400, 650],
            "font": "/Helvetica-Oblique"
        },
        "hello_3": {
            "new": "Tx",
            "value": "Hello, World!",
            "rect": [100, 500, 400, 550],
            "font": "/Courier-Bold"
        },
        "hello_4": {
            "new": "Tx",
            "value": "ABCDEFGHIJKLMN",
            "rect": [100, 400, 400, 450],
            "font": "/ZapfDingbats"
        },
        "hello_5": {
            "new": "Tx",
            "value": "こんにちは世界",
            "rect": [100, 300, 400, 350],
            "font": "/KozGo-Medium"
        }
    }
}' \
--output $OUTPUT