<?php
include("functions.php");
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["book_name"]) || $_POST["book_name"]=="" ||
  !isset($_POST["book_url"]) || $_POST["book_url"]=="" ||
  !isset($_POST["book_cmt"]) || $_POST["book_cmt"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$book_name   = $_POST["book_name"];
$book_url  = $_POST["book_url"];
$book_cmt = $_POST["book_cmt"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, book_name, book_url, book_cmt,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())");
$stmt->bindValue(':a1', $book_name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $book_url,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $book_cmt, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  queryError($stmt);

}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}
?>
