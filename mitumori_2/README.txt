Field Reports サンプルコード「見積書（複合帳票）」
==================================================

見積書の表紙＋見積書本体の２枚構成の帳票のサンプルです。

ファイルの内容
--------------
:hyousi.ods:
    見積書表紙の元原稿（OpenOffice.org形式）

:hyousi.pdf:
    見積書表紙のPDFテンプレート

:mitumori.odt:
    見積書の元原稿（OpenOffice.org形式）

:mitumori.pdf:
    見積書のPDFテンプレート

:stamp.png:
    印影画像

:mitumori.json:
    レンダリング・パラメータ（JSON形式）

:mitumori.py:
    Pythonプログラム

:mitumori.rb:
    Rubyプログラム

:mitumori.pl:
    Perlプログラム

:mitumori.php:
    PHPプログラム

:out.pdf:
    出力結果

ポイント
--------

- 表紙に“header”, 本体に“body”という名前をつけることで，フィールドの名前空
  間を分離しています。

- 名前空間を挿入した分，context要素の階層を１段深くする必要があります。

- 日付の値として環境変数NOWを指定することで，現在日付を取得しています。

- 数値項目の値を数値とし，style要素により数値の書式を指定しています。

- style要素では，ワイルドカードを使うことで，復数フィールドに対して一括して
  styleの指定を行っています。

実行方法
--------

Python::
    $ python mitumori.py out.pdf

Ruby::
    $ ruby mitumori.rb out.pdf

Perl::
    $ perl mitumori.pl out.pdf

PHP::
    $ php mitumori.php out.pdf

コマンドライン::
    $ reports create mitumori.json out.pdf

