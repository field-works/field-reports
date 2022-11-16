# coding: utf-8

require "field_reports"

$param = {
    "template": {"paper": "A4"},
    "context": {
        "hello": {
            "new": "Tx",
            "value": "Hello, World!",
            "rect": [100, 700, 400, 750]
        }
    }
}

if ARGV.length == 1 then
    reports = FieldReports::Bridge.create_proxy()
    pdf = reports.render($param)
    File.binwrite(ARGV[0], pdf)
else
    p "usage: %s <outfile>" % $0
end

