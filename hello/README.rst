Hello World
===========

PDFテンプレートを使用せず，スクラッチからPDFを作成する場合のサンプルです。

ファイルの内容
--------------

hello1.json, hello2.json, hello3.json
    レンダリング・パラメータ（JSON形式）

out1.pdf, out2.pdf, out3.pdf
    出力結果

ポイント
--------

- template辞書では，用紙のサイズのみをpaper属性で指定します。
 
- PDFテンプレートを使用しない場合にはフィールド名に意味はありませんが，ここで
  は便宜的に“hello_n”というフィールド名を付けています。
 
- フィールド属性のnew要素により，新規にテキストフィールドを作成することを指示
  します。value属性でフィールドの値を与え，rect属性でフィールドの座標（[左,
  下, 右, 上]）を与えます。
 
- 座標系の単位はすべてポイント（pt）で統一しています。1ポイント ＝ 1/72インチ
  ≒ 0.3528mm ですので，A4タテの用紙であれば，210mm×297mm ≒ 595pt×842pt と
  なります。
 
- 座標系の原点は左下なので，左下の座標が(0, 0)，右上の座標が(595, 842)となります。

実行方法
--------

コマンドライン::

    $ reports create hello1.json out1.pdf
    $ reports create hello2.json out2.pdf
    $ reports create hello3.json out3.pdf

