写真付き料理レシピ
================

画像を配置した帳票のサンプルです。

ファイルの内容
--------------
- recipe.ods  
    料理レシピの元原稿（OpenOffice.org形式）
- recipe.pdf  
    PDFテンプレート
- recipe_photo.jpg  
    料理画像
- recipe.json  
    レンダリング・パラメータ（JSON形式）

ポイント
--------

- PDFテンプレートの下絵は，オフィスソフトOpenOffice.orgのCalcを使用して作成しました。

実行方法
--------

コマンドライン:

    $ reports render recipe.json out.pdf
