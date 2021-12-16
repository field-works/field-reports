見積書（単票）
==============

１枚構成の見積書のサンプルです。

テーブル形式の明細項目を持っています。

ファイルの内容
--------------
mitumori.odt
    見積書の元原稿（OpenOffice.org形式）

mitumori.pdf
    PDFテンプレート

stamp.png
    印影画像

mitumori.json
    レンダリング・パラメータ（JSON形式）

mitumori.py
    Pythonプログラム

mitumori.rb
    Rubyプログラム

mitumori.php
    PHPプログラム

ポイント
--------

- 単票の場合は，template要素の値として，テンプレートのパス名を直接指定すること
  ができます。

- フィールドの値はすべて文字列で指定し，その値がそのまま出力されています。

- ボタンフィールドには，iconエントリにより，画像ファイルを指定できます。

- 0, 1, 2,…と命名されたテーブル形式のフィールドでは，配列を利用することで，部
  分フィールド名の指定を省略できます。

- 「御見積金額合計」と「税込合計」の欄は，同名のフィールド“total”を配置する
  ことで，context要素の指定が１箇所で済んでいます。
  
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

