フォトアルバム
==============

画像を中心とした帳票のサンプルコードです。

Field Reports 1.4で追加された画像フィールドの回転，PDFの重ね合わせなどの機能を
利用しています。

ファイルの内容
--------------
- album.json  
    レンダリング・パラメータ（JSON形式）
- album.pdf  
    PDFテンプレート
- kid0043-009.jpg, kid0054-009.jpg  
    写真画像
- pin.pdf  
    「虫ピン」画像

ポイント
--------

- 写真画像は，rotation属性により回転角度を指定しています。
- 写真の四隅にピン状の画像を合成するために，ピン画像のみ抽出したPDFを使用して
  います。

実行方法
--------

コマンドライン:

    $ reports render album.json out.pdf

