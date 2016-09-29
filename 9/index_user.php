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
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid"></div>
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログインページ</a></div>
  </nav>
</header>    
<!-- Head[End] -->
<!-- Main[Start] -->
<form method="post" action="insert_user.php" onsubmit="return check();">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PASSWORD：<input type="text" name="lpw"></label><br>
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
