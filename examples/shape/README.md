図形要素
========

図形要素を利用したサンプルです。

ファイルの内容
--------------

- basic-shape.json  
    基本図形の使用例です。
- path.json  
    パスの使用例です。
- clip-path.json  
    クリッピングパスの使用例です。

ポイント
--------

- 図形要素では，基本図形とパスを使ってベクトル図形を記述できます。
- パスと同様の書式で，フィールドのクリッピング領域を設定できます。

実行方法
--------

コマンドライン:

    $ reports render basic-shape.json out1.pdf
    $ reports render path.json out2.pdf
    $ reports render clip-path.json out3.pdf
