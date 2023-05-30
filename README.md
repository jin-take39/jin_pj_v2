# jin_pj_v2

JUST IN NEXT 言語研修 v2 開発環境構築手順<br>
前提条件：Windows<br>
1.Docker Desktopがインストールされている。<br>
2.Wslがインストールされている。<br>

1.docker imageを作成<br>
※infraディレクトへ配下へ移動<br>
>make build

2.containerの作成<br>
>make up

3.containerの削除<br>
>make down

4.containerの停止<br>
>make stop

5.containerの開始<br>
>make start
