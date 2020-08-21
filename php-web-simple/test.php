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
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <noscript>
            <p>you can't javascript</p>
        </noscript>

        <h1><?php echo $title; ?></h1>
        <div style="color:grey;">対象の文字列：<?php echo $data; ?></div>
        <div style="color:grey;">区切り文字：<?php echo $separator; ?></div>
        <div style="color:grey;">test ： <?php print_r(explode($separator, $data));?></div>
    </body>
</html>