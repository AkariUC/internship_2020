<!-- phpを使ったHTML埋め込み式デモページ -->
<!DOCTYPE html>
<html lang="jp">
<link rel="stylesheet" href="./style.css">
<head>
	<meta charset="utf-8">
	<title>profile</title>
	<?php
        $birthday = date("1999年12月23日");
    ?>
</head>
<body>
    <div class="box26">
        <span class="box-title">profile</span>
        <div style="color: grey">
            <footer>
                誕生日は<br>
                <?php
                    echo $birthday;
                ?>
                <br>です。
            </footer>
        </div>
    </div>
</body>
</html>