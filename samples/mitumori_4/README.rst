見積書（複合＋連続帳票）
========================

表紙＋明細（複数枚）構成の見積書のサンプルです。

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

mitumori.pl
    Perlプログラム

mitumori.php
    PHPプログラム

out.pdf
    出力結果

ポイント
--------

- 複合帳票と連続帳票を合わせる場合は，連続帳票部分の名前空間を“body.*”のよう
  に1段階層を深くします。

- property辞書により，出力されるPDFに文書情報を付与しています。
  
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

