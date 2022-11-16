可変テーブル
=============

可変テーブルのサンプルです。

ファイルの内容
--------------
- stamp.png  
    印影画像
- table.pdf  
    PDFテンプレート
- tate-variable.json  
    各ページにフッターを配置する可変テーブル
- tate-variable2.json  
    最終ページにフッターを配置する可変テーブル
- table-tate.json  
    縦組み可変テーブル

実行方法
--------

コマンドライン:

    $ reports render tate-variable.json out1.pdf
    $ reports render tate-variable2.json out2.pdf
    $ reports render tate-tate.json out3.pdf
