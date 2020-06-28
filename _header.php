
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>営業マニュアル</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <!-- スムーズスクロール -->
    <script>
        $(function(){
            $('a[href^="#"]').click(function() {
                var speed = 400; // ミリ秒で記述
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("body,html").animate({scrollTop:position}, speed, 'swing');
                return false;
            });
        });
        </script>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script src="script.js"></script>
</head>
<body>
    <div class="header">
        <a href="">
            <h3>Web版 営業マニュアル</h3>
        </a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">商談テンプレート</a></li>
            <li><a href="nega.php">ネガ返し一覧＆追加</a></li>
            <li><a href="tool.php">使えるツール</a></li>
        </ul>
    </div>
 