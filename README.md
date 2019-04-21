Almost source codes are released under the MIT License. But it will apply each license to following files.

- buttons.css - under Apache License 2.0 - Copyright 2012-2014 Alex Wolfe and Rob Levin

  see also [https://github.com/alexwolfe/Buttons/blob/master/LICENSE](https://github.com/alexwolfe/Buttons/blob/master/LICENSE)
- phpMQTT.php - under MIT License - Copyright (c) 2010 Blue Rhinos Consulting | Andrew Milsted

  see also [https://github.com/bluerhinos/phpMQTT/blob/master/LICENSE](https://github.com/bluerhinos/phpMQTT/blob/master/LICENSE)

- index.php - under MIT License - Copyright (c) 2015 Hajime Taira

## 「Raspberry Pi Zeroではじめよう！ おうちで楽しむIoTレシピ」

以下連載記事で紹介するIoTプラレールのサンプルコードです。

https://codezine.jp/article/corner/725

IoTマスコンは、IoTクリスマスツリーをアレンジしたものになります。

https://github.com/manami-taira/mqtt-xmas-tree-subscriber

## Sandbox使用時の注意点
　
- SandboxのURLである`iot.eclipse.org`は、あくまでもテスト目的のための MQTT Brokerです。もしテスト利用ではなく、恒久的に使用したい場合、Active MQなどの MQTT Brokerを別途準備してください。
- Sandboxを使用するとき、指定したtopicが他のユーザーと同一で、かつ同一タイミングで実行すると、メッセージの送受信に失敗する恐れがあります。そのためtopic名は必要に応じて変更してください。今回、topic名は `eh200` にしています。こちらを適宜変更して下さい。
- また、今回使用したEclipseの MQTT Broker の詳細については以下をご覧下さい（Sandboxを無償で提供している性質上、予告なくメンテナンスが入り繋がらなくなることがありますのでご注意ください）。<br />iot.eclipse.org - IoT development made simple

## 手順

Azure Web Apps で作成したDockerコンテナーへ簡単にアクセスするために、WebブラウザーからSSHができるツール「Web SSH」を使います。「App Service」→「開発ツール」→「SSH」を選択し、移動をクリックします。

Webブラウザー上からSSHできるようになります。


今回作成したWeb Appの、Dockerコンテナーで動作しているLinuxのOSはUbuntuのため、`apt-get`コマンドを使ってパッケージリストの更新を行います。その後、Gitをインストールします。

```
# apt-get update
# apt-get install git
```

gitコマンドでWebアプリ用のプログラムをコピーします。そのとき、デフォルトのドキュメントルートとして指定されている`/var/www/html`配下にコンテンツが格納されるように、コピー先のディレクトリ名を指定します。

その際、`/var/www/html`にデフォルトで用意されているページ`hostingstart.html`を削除してから作業します。

```
# rm /var/www/html/hostingstart.html
# git clone https://github.com/manami-taira/iot-mascon /var/www/html
```


`/var/www/html` のディレクトリに次のようにファイルが配置されていたら成功です。

```
# ls -1 /var/www/html
LICENSE
README.md
buttons.css
index.php
phpMQTT.php
test_publisher.php
title.png
```
