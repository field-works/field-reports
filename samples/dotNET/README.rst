.NET Frameworkからの利用例
==========================

C#, VB.NET，.Net Coreからの利用例です。

ファイルの内容
--------------
vb2010
    Visual Basic 2010 で作成したWindowsフォームアプリケーションのサンプルです。

vcs2010
    Visual C# 2010 で作成したWindowsフォームアプリケーションのサンプルです。

vcs2015
    Visual C# 2015 で作成したWindowsフォームアプリケーションのサンプルです。
    .NET Framework BridgeをNugetギャラリーから取得しています。

core
    .NET Core で作成したコンソールプリケーションのサンプルです。
    dotnetコマンドラインツールでビルドされることを想定しています。

注意事項
--------

- 実行時にTypeInitializationException例外が発生する場合は、プロジェクトの「ビルド」設定で「32ビットの優先(Prefer 32-bit)」の設定を調整してください。
