<?php
$param = array(
    # テンプレート
    "template" => array(
        array("header" => "./hyousi.pdf"),
        array("body" => "./mitumori.pdf")
    ),

    # フィールド値
    "context" => array(
        "header" => array(
            "date" => "\${NOW}",
            "number" => "10R0001",
            "to" => "△△△惣菜株式会社",
            "title" => "肉じゃがの材料",
            "delivery_date" => "2011-03-01",
            "delivery_place" => "貴社指定場所",
            "payment_terms" => "銀行振込",
            "expiration_date" => "発行から３ヶ月以内",
            "total" => 840
        ),
        "body" => array(
            "date" => "\${NOW}",
            "number" => "10R0001",
            "to" => "△△△惣菜株式会社",
            "title" => "肉じゃがの材料",
            "delivery_date" => "2011-03-01",
            "delivery_place" => "貴社指定場所",
            "payment_terms" => "銀行振込",
            "expiration_date" => "発行から３ヶ月以内",
            "stamp1" => array("icon" => "./stamp.png"),
            "table" => array(
                array("1", "N001", "牛肉（切り落とし）", "200g", 250, 500),
                array("2", "Y001", "じゃがいも（乱切り）", "3個", 30, 90),
                array("3", "Y002", "にんじん（乱切り）", "1本", 40, 40),
                array("4", "Y003", "たまねぎ（くし切り）", "1個", 50, 50),
                array("5", "Y004", "しらたき", "1袋", 80, 80),
                array("6", "Y005", "いんげん", "1袋", 40, 40)
            ),
            "sub_total" => 800,
            "tax" => 40,
            "total" => 840
        )
    ),

    # スタイル指定
    "style" => array(
        array("*.date" => array("datetime" => "GGE年M月D日")),
        array("*.delivery_date" => array("datetime" => "GGE年M月D日")),
        array("*.total" => array("format" => "###,###円")),
        array("*.sub_total" => array("format" => "###,###円")),
        array("*.tax" => array("format" => "###,###円")),
        array("body.table.*.[4:6]" => array("format" => "###,###円"))
    )
);

fr_set_log_level(3);
fr_render($param, $argv[1]);
?>

