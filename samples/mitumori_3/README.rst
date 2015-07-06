見積書（連続帳票）
==================

複数枚構成の見積書のサンプルです。

ファイルの内容
--------------
hyousi.ods
    見積書表紙の元原稿（OpenOffice.org形式）

hyousi.pdf
    見積書表紙のPDFテンプレート

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

mitumori.pl
    Perlプログラム

mitumori.php
    PHPプログラム

ポイント
--------

- 明細テーブルの行数応じてページ数を増やすタイプの帳票を連続帳票と呼びます。

- 連続帳票では，PDFテンプレートの名称を“*”とします。

- “rows”エントリにより，テーブルの最大の行数を指定します。

- context要素の値は，リスト（配列）形式になります。

- tableの値としてテーブルの最大行数を超えるデータを与えると，自動的に必要な
  ページ数に分割します。

- フィールドに「複数行」の指定がなされている場合，文字列中の“\n”の位置で改行
  します。

- 2ページ目以降の印影と備考欄を非表示にしています。

- 1行おきに背景色を変えるstyle指定を行っています。

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

