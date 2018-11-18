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
