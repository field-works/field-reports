<?php
$param = array(
    # テンプレート
    "template" => array(
        array("header" => "./hyousi.pdf"),
        array("body.*" => array("src" => "./mitumori.pdf", "rows" => 10))
    ),

    # フィールド値
    "context" => array(
        "header" => array(
            "date" => "\${NOW}",
            "number" => "10R0002",
            "to" => "△△△惣菜株式会社",
            "title" => "今週の献立",
            "delivery_date" => "2011-03-01",
            "delivery_place" => "貴社指定場所",
            "payment_terms" => "銀行振込",
            "expiration_date" => "発行から３ヶ月以内",
            "total" => 2699
        ),
        "body" => array(
            array(
                "date" => "\${NOW}",
                "number" => "10R0002",
                "to" => "△△△惣菜株式会社",
                "title" => "今週の献立",
                "delivery_date" => "2011-03-01",
                "delivery_place" => "貴社指定場所",
                "payment_terms" => "銀行振込",
                "expiration_date" => "発行から３ヶ月以内",
                "stamp1" => array("icon" => "./stamp.png"),
                "table" => array(
                    array(1, "N001", "豚肉", "200g", 230, 460),
                    array(2, "G001", "エビ", "16尾", 40, 640),
                    array(3, "Y001", "小松菜", "1束", 120, 120),
                    array(4, "Y002", "ミツバ", "2束", 30, 60),
                    array(5, "Y003", "ショウガ", "1かけ", 30, 30),
                    array(6, "Y004", "大根", "1本", 120, 120),
                    array(7, "Y005", "水煮コーン", "1缶", 130, 130),
                    array(8, "K001", "片栗粉", "1袋", 150, 150),
                    array(9, "K002", "コーンスープの元", "2袋", 40, 80),
                    array(10, "T001", "卵", "１パック", 140, 140),
                    array(11, "T002", "牛乳", "１本", 180, 180),
                    array(12, "M001", "絹ごし豆腐", "2丁", 60, 120),
                    array(13, "C001", "みりん", "大さじ2", "‐", "‐"),
                    array(14, "C002", "しょうゆ", "大さじ7", "‐", "‐"),
                    array(15, "C003", "酢", "大さじ4", "‐", "‐"),
                    array(16, "C004", "砂糖", "大さじ3", "‐", "‐"),
                    array(17, "C005", "コショウ", "少々", "‐", "‐"),
                    array(18, "C006", "粉山椒", "少々", "‐", "‐"),
                    array(19, "C007", "赤唐辛子", "1パック", 180, 180),
                    array(20, "C008", "ごま油", "大さじ2", "‐", "‐"),
                    array(21, "C009", "サラダ油", "大さじ4", "‐", "‐"),
                    array(22, "S001", "酒", "大さじ3", "‐", "‐"),
                    array(23, "O001", "ホットケーキミックス", "200g", 80, 160),
                    array(24, "O002", "だし汁", "300ml", "‐", "‐")
                ),
                "sub_total" => 2570,
                "tax" => 128,
                "total" => 2699,
                "remark" => "エビと豆腐のショウガ炒め（４人分）
ミツバの卵とじ（４人分）
大根のピリ辛漬け（４人分）
コーンカップケーキ （４人分）"
            )
        )
    ),

    # スタイル指定
    "style" => array(
        array("header.date" => array("datetime" => "GGE年M月D日")),
        array("header.delivery_date" => array("datetime" => "GGE年M月D日")),
        array("header.total" => array("format" => "###,###円")),
        array("header.sub_total" => array("format" => "###,###円")),
        array("header.tax" => array("format" => "###,###円")),
        array("header.table.*.[4:6]" => array("format" => "###,###円")),
        array("body.*.date" => array("datetime" => "GGE年M月D日")),
        array("body.*.delivery_date" => array("datetime" => "GGE年M月D日")),
        array("body.*.total" => array("format" => "###,###円")),
        array("body.*.sub_total" => array("format" => "###,###円")),
        array("body.*.tax" => array("format" => "###,###円")),
        array("body.*.table.*.[4:6]" => array("format" => "###,###円")),
        array("body.[1:].stamp1" => array("visible" => "False")),
        array("body.[1:].remark" => array("visible" => "False")),
        array("body.*.table.[1::2]" => array("background-color" => array(220, 220, 255)))
    ),

    # プロパティ指定
    "property" => array(
        "docinfo" => array(
            "title" => "今週の献立",
            "subject" => "御見積書",
            "keywords" => "エビと豆腐のショウガ炒め, ミツバの卵とじ, 大根のピリ辛漬け, コーンカップケーキ"
        )
    )
);

fr_set_log_level(3);
fr_render($param, $argv[1]);
?>
