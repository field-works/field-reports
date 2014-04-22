<?php
    $param = array(
    # テンプレート
    "template" => "./mitumori.pdf",

    # フィールド値
    "context" => array(
        "date" => "平成23年1月22日",
        "number" => "10R0001",
        "to" => "△△△惣菜株式会社",
        "title" => "肉じゃがの材料",
        "delivery_date" => "平成23年1月22日",
        "delivery_place" => "貴社指定場所",
        "payment_terms" => "銀行振込",
        "expiration_date" => "発行から３ヶ月以内",
        "stamp1" => array("icon" => "./stamp.png"),
        "table" => array(
            array("1", "N001", "牛肉（切り落とし）", "200g", "250円", "500円"),
            array("2", "Y001", "じゃがいも（乱切り）", "3個", "30円", "90円"),
            array("3", "Y002", "にんじん（乱切り）", "1本", "40円", "40円"),
            array("4", "Y003", "たまねぎ（くし切り）", "1個", "50円", "50円"),
            array("5", "Y004", "しらたき", "1袋", "80円", "80円"),
            array("6", "Y005", "いんげん", "1袋", "40円", "40円"),
        ),
        "sub_total" => "800円",
        "tax" => "40円",
        "total" => "840円",
        ),
    );

    fr_set_log_level(3);

    fr_render($param, $argv[1]);
?>
