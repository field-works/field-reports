#!/usr/bin/env python
# coding: utf-8

import sys
from field import reports

param = {
    # テンプレート
    "template": [
        {"header": "./hyousi.pdf"},
        {"body": "./mitumori.pdf"}
    ],

    # フィールド値
    "context": {
        "header": {
            "date": "${NOW}",
            "number": "10R0001",
            "to": "△△△惣菜株式会社",
            "title": "肉じゃがの材料",
            "delivery_date": "2011-03-01",
            "delivery_place": "貴社指定場所",
            "payment_terms": "銀行振込",
            "expiration_date": "発行から３ヶ月以内",
            "total": 840
        },
        "body": {
            "date": "${NOW}",
            "number": "10R0001",
            "to": "△△△惣菜株式会社",
            "title": "肉じゃがの材料",
            "delivery_date": "2011-03-01",
            "delivery_place": "貴社指定場所",
            "payment_terms": "銀行振込",
            "expiration_date": "発行から３ヶ月以内",
            "stamp1": {"icon": "./stamp.png"},
            "table": [
                ["1", "N001", "牛肉（切り落とし）", "200g", 250, 500],
                ["2", "Y001", "じゃがいも（乱切り）", "3個", 30, 90],
                ["3", "Y002", "にんじん（乱切り）", "1本", 40, 40],
                ["4", "Y003", "たまねぎ（くし切り）", "1個", 50, 50],
                ["5", "Y004", "しらたき", "1袋", 80, 80],
                ["6", "Y005", "いんげん", "1袋", 40, 40]
            ],
            "sub_total": 800,
            "tax": 40,
            "total": 840
        }
    },

    # スタイル指定
    "style": [
        {"*.date": {"datetime": "GGE年M月D日"}},
        {"*.delivery_date": {"datetime": "GGE年M月D日"}},
        {"*.total": {"format": "###,###円"}},
        {"*.sub_total": {"format": "###,###円"}},
        {"*.tax": {"format": "###,###円"}},
        {"body.table.*.[4:6]": {"format": "###,###円"}}
    ]
}

if __name__ == "__main__":
    if len(sys.argv) == 2:
        reports.set_log_level(3)
        reports.render(param, sys.argv[1])
    else:
        print("usage: %s <outfile>" % (sys.argv[0], ))

