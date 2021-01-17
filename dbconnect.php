<?php
try{
// 例外処理
    $db = new PDO('mysql:dbname=heroku_587425a4d683686;host=us-cdbr-east-03.cleardb.com;charset=utf8', 'b9ff9d69f410c3', 'c2846a98');
    // DBに接続できるようになった。

}catch(PDOException $e){
  // DBに接続できなかった場合
  print('DB接続エラー：' . $e->getMessage());
}
