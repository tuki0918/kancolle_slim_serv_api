Slim Framework in Micro MVC
----

### コマンドライン：実行
```
php -f command.php [command1 [,command2]]
```


### ルーティング：読込
+ site
	+ app/Route/site.default.php
	+ app/Route/site.error.php
	+ app/Route/site.*.php
+ cli
	+ app/Route/cli.default.php
	+ app/Route/cli.error.php
	+ app/Route/cli.*.php


### 設定：アプリケーション
+ app/Config/application.php


### 設定：環境設定
+ app/Config/define.php
+ app/Config/iniset.php
+ app/Config/database.php
