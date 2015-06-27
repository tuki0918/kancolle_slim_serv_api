Slim Framework in Micro MVC
----

#### DocumentRoot
+ public


#### コマンドライン：実行
```
bin/run.php [command [, ...]]
```


#### ルーティング：読込
+ HTTP/HTTPS
	+ app/Route/common.default.php
	+ app/Route/common.*.php
	+ app/Route/site.default.php
	+ app/Route/site.error.php
	+ app/Route/site.*.php
+ Command-Line
	+ app/Route/common.default.php
	+ app/Route/common.*.php
	+ app/Route/cli.default.php
	+ app/Route/cli.error.php
	+ app/Route/cli.*.php


#### 設定：アプリケーション
+ app/Config/application.php


#### 設定：環境設定
+ app/Config/define.php
+ app/Config/iniset.php
+ app/Config/database.php


#### サードパーティライブラリ
+ slim/slim
+ illuminate/database
+ monolog/monolog
+ slim/views
+ twig/twig
+ davedevelopment/phpmig
+ pimple/pimple


#### パーミッション
```
chmod 777 logs, app/View/cache
```


#### マイグレーション
```
// ステータスの確認
bin/phpmig status

// マイグレーションファイルの作成
bin/phpmig generate [MigrationName]

// マイグレーションの実行
bin/phpmig migration

// １つ戻る
bin/phpmig rollback

// すべて戻る
bin/phpmig rollback -t 0

// 指定のMigrationIDの完了時点まで戻る
bin/phpmig rollback -t [MigrationID]

// 指定のMigrationIDのみをマイグレーション/ロールバック
bin/phpmig [up|down] [MigrationID]
```
