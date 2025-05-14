# アプリケーション名
　お問い合わせフォーム（　FashionablyLate　）
 
## 環境構築
- Dockerのビルドからマイグレーション、シーディングまでを記述する
- 1　git clone ★
- 2　docker-compose up -d build
  ※MySQLはOSによって起動しない場合があるのでそれぞれのPCにあわせてdocker-compose.ymlファイルを編集してください。

  　Laravel環境構築
  　1　docker-compose exec php bash
    2　composer install
    3　.env.exampleファイルから.envを作成し、環境変数を変更
  　4　php artisan key:generate
    5  php artisan migrate
    6  php artisan db:seed （未完です）

## 使用技術(実行環境)
- PHP　8.4.4
- Laravel　8.83.8
- MySQL

## ER図
[FashionableLate] https://github.com/user-attachments/assets/e3ab1fa6-352e-4d0f-a641-dff24bf87ded

## URL
― 開発環境：http://localhost/
―　phpMyAdmin：http://localhost:8080/