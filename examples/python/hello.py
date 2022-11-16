# -*- coding: utf-8 -*-

from field_reports import Bridge, ReportsError

param = {
    "template": {"paper": "A4"},
    "context": {
        "hello": {
            "new": "Tx",
            "value": "Hello, World!",
            "rect": [100, 700, 400, 750]
        }
    }
}
reports = Bridge.create_proxy()
pdf = reports.render(param)
with open("out.pdf", "wb") as f:
    f.write(pdf)
