<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Japanese Word Pad</title>
  <link href="../kadai/css/style.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="main">
<p class="header">日本語単語帳</p>
<p class="pre_header">To write & record Japanese word </p>
<form method="post" action="insert.php">
  <div class="jumbotron">
     <label>■word<input type="text" name="word" class="textbox"></label><br>

     <div class="text0">
     <label>■example_sentence<textArea name="content" rows="6" cols="40" class="textbox1"></textArea></label>
     </div>
     <!-- ここで保存・相談 -->
     <input type="submit" value="Reserve" class="reserve"></br>
     <a class="register" href="select.php">Show words pad</a>
     <!-- データベースの方でそれを受け取り、表示すること -->
  </div>
</form>
<!-- Main[End] -->

</div>
</body>
</html>
