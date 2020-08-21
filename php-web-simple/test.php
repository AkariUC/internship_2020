<?php 
    $title = 'test';
    $data = 'cow,pig';
    $separator = ',';
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title; ?></title>

        <script type="text/javascript">
            var today = new Date();
            var month = today.getMonth() + 1;
            var day = today.getDate();
            document.write("今日は" + month + "月"+ day + "日です。");
        </script>
    </head>
    <body>
        <noscript>
            <p>you can't javascript</p>
        </noscript>
        <div style="padding: 0.5em 1em;
                    margin: 2em 0;
                    font-weight: bold;
                    border: solid 3px grey;" >
            <h1 class="text-info"><?php echo $title; ?></h1>
            <div style="color:grey;">対象の文字列：<?php echo $data; ?></div>
            <div style="color:grey;">区切り文字：<?php echo $separator; ?></div>
            <div style="color:grey;">test ： <?php print_r(explode($separator, $data));?></div>
            <h1></h1>
        </div>
    </body>
</html>