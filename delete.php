<?php
session_start();
require('dbconnect.php');

if (isset($_SESSION['id'])){
  // idのsessionが記録されているか、自分のメッセージがあるかどうか
  // 削除する候補を読み込む
  $id = $_REQUEST['id'];

  $messages = $db->prepare('SELECT * FROM posts WHERE id=?');
  $messages->execute(array($id));
  $message = $messages->fetch();

  if ($message['member_id'] == $_SESSION['id']){
    $del = $db->prepare('DELETE FROM posts WHERE id=?');
    $del->execute(array($id));
  }
}
header('Location: index.php');
exit();
?>