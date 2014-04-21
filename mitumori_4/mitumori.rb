#!/usr/bin/env ruby
# coding: utf-8

require 'rubygems'
require 'field/reports'

$param = {
    # テンプレート
    "template" => [
        {"header" => "./hyousi.pdf"},
        {"body.*" => {"src" => "./mitumori.pdf", "rows" => 10}}
    ],

    # フィールド値
    "context" => {
        "header" => {
            "date" => "${NOW}",
            "number" => "10R0002",
            "to" => "△△△惣菜株式会社",
            "title" => "今週の献立",
            "delivery_date" => "2011-03-01",
            "delivery_place" => "貴社指定場所",
            "payment_terms" => "銀行振込",
            "expiration_date" => "発行から３ヶ月以内",
            "total" => 2699
        },
        "body" => [
            {
                "date" => "${NOW}",
                "number" => "10R0002",
                "to" => "△△△惣菜株式会社",
                "title" => "今週の献立",
                "delivery_date" => "2011-03-01",
                "delivery_place" => "貴社指定場所",
                "payment_terms" => "銀行振込",
                "expiration_date" => "発行から３ヶ月以内",
                "stamp1" => {"icon" => "./stamp.png"},
                "table" => [
                    [1, "N001", "豚肉", "200g", 230, 460],
                    [2, "G001", "エビ", "16尾", 40, 640],
                    [3, "Y001", "小松菜", "1束", 120, 120],
                    [4, "Y002", "ミツバ", "2束", 30, 60],
                    [5, "Y003", "ショウガ", "1かけ", 30, 30],
                    [6, "Y004", "大根", "1本", 120, 120],
                    [7, "Y005", "水煮コーン", "1缶", 130, 130],
                    [8, "K001", "片栗粉", "1袋", 150, 150],
                    [9, "K002", "コーンスープの元", "2袋", 40, 80],
                    [10, "T001", "卵", "１パック", 140, 140],
                    [11, "T002", "牛乳", "１本", 180, 180],
                    [12, "M001", "絹ごし豆腐", "2丁", 60, 120],
                    [13, "C001", "みりん", "大さじ2", "‐", "‐"],
                    [14, "C002", "しょうゆ", "大さじ7", "‐", "‐"],
                    [15, "C003", "酢", "大さじ4", "‐", "‐"],
                    [16, "C004", "砂糖", "大さじ3", "‐", "‐"],
                    [17, "C005", "コショウ", "少々", "‐", "‐"],
                    [18, "C006", "粉山椒", "少々", "‐", "‐"],
                    [19, "C007", "赤唐辛子", "1パック", 180, 180],
                    [20, "C008", "ごま油", "大さじ2", "‐", "‐"],
                    [21, "C009", "サラダ油", "大さじ4", "‐", "‐"],
                    [22, "S001", "酒", "大さじ3", "‐", "‐"],
                    [23, "O001", "ホットケーキミックス", "200g", 80, 160],
                    [24, "O002", "だし汁", "300ml", "‐", "‐"]
                ],
                "sub_total" => 2570,
                "tax" => 128,
                "total" => 2699,
                "remark" => """エビと豆腐のショウガ炒め（４人分）
ミツバの卵とじ（４人分）
大根のピリ辛漬け（４人分）
コーンカップケーキ （４人分）"""
            }
        ]
    },

    # スタイル指定
    "style" => [
        {"header.date" => {"datetime" => "GGE年M月D日"}},
        {"header.delivery_date" => {"datetime" => "GGE年M月D日"}},
        {"header.total" => {"format" => "###,###円"}},
        {"header.sub_total" => {"format" => "###,###円"}},
        {"header.tax" => {"format" => "###,###円"}},
        {"header.table.*.[4:6]" => {"format" => "###,###円"}},
        {"body.*.date" => {"datetime" => "GGE年M月D日"}},
        {"body.*.delivery_date" => {"datetime" => "GGE年M月D日"}},
        {"body.*.total" => {"format" => "###,###円"}},
        {"body.*.sub_total" => {"format" => "###,###円"}},
        {"body.*.tax" => {"format" => "###,###円"}},
        {"body.*.table.*.[4:6]" => {"format" => "###,###円"}},
        {"body.[1:].stamp1" => {"visible" => false}},
        {"body.[1:].remark" => {"visible" => false}},
        {"body.*.table.[1::2]" => {"background-color" => [220, 220, 255]}}
    ],

    # プロパティ指定
    "property" => {
        "docinfo" => {
            "title" => "今週の献立",
            "subject" => "御見積書",
            "keywords" => "エビと豆腐のショウガ炒め, ミツバの卵とじ, 大根のピリ辛漬け, コーンカップケーキ"
        }
    }
}

if ARGV.length == 1 then
    Field::Reports.set_log_level(3)
    Field::Reports.render($param, ARGV[0])
else
    p "usage: %s <outfile>" % $0
end

