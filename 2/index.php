<!DOCTYPE html>
<html lang="ar" dir="RTL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: auto;
            width: 50%;
            padding: 20px;
            text-align: center; 
             }
    </style>
</head>

<body>
    <form method="POST">
        <textarea name="text" cols="30" rows="10" value="<?php echo $text; ?>"></textarea><br>
        <button type="submit" name="send">حساب</button>
    </form>

    <?php
    /*  
    ================================= ترجمة الكلمات المستعملة ============================
                            send = ارسال
                            text = نص
                            result = نتيجة
    ========================================================================================
    */

    if (isset($_POST['send'])) 
    {
        $text = $_POST['text'];

        function name($text)
        {
            $a = preg_split('~[^\p{L}\p{N}\']+~u', $text, -1, PREG_SPLIT_NO_EMPTY);
            return count($a);
        }
        $result = name($text);

        echo "عدد الكلمات : " . $result . "<br>";
        /* ==================================================================================
                                      كلمة 500 = $5
                                      5/500 = 0.01$
                        $اي ان ثمن ترجمة كلمة واحدة هو : 0.01
        ================================================================================== */ 
        echo "تكلفة الترجة هيا : " . $result * 0.01 . "$"; 
    }
    ?>
</body>
</html>
