<?php
session_start();
//0.外部ファイル読み込み
include("functions.php");

ssidCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
    
</head>
<body>

<!-- Head[Start] -->
<?php
  if($_SESSION["kanri_flg"]=="1"){
    include("admenu.html");
  }else{
    include("menu.html");
  }
?>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div>ようこそ <?php echo $_SESSION["name"] ?> さん</div>
</div>
<form method="post" action="insert.php" onsubmit="return check();">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>タイトル：<input type="text" name="book_name"></label><br>
     <label>URL：<input type="text" name="book_url"></label><br>
     <label><textArea name="book_cmt" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<script type="text/javascript">
    function check(){
         myRet = confirm("本当に登録して、よろしいですか？");
         if ( myRet == false ){
            return false;
         }
    }
</script>
    

</body>
</html>
