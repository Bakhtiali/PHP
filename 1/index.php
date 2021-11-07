<!DOCTYPE html>
<html lang="ar" dir="RTL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP </title>
</head>
<body>
    <center>
        <form method="POST">
            <h1>حساب نسبة تخفيض<h1>
               <h2>سعر المنتوج : <input type="number" name="Price" required /><br></h2>
               <h2> نسبة تخفيض :<input type="number" name="Discount" required /><br></h2>
            <button type="submit" name="Send">حساب</button>
        </form>
    </center>
    <?php
    /* 
    ==========================  طريقة الحساب  ================================
      [ مبلغ السلعة ] × [ نسبة التخفيض ] ÷ [ 100 ] | مثال : 2000 × 30 ÷ 100 
    ======================== ترجمة الكلمات المستعملة ========================
    * Send = ارسال                                                            
    * Price = سعر                                                             
    * Discount = خصم                                                          
    * Result = نتيجة                                                          
    */

    if (isset($_POST['Send'])) 
    {
        $Price = $_POST['Price'];
        $Discount = $_POST['Discount'];
        $Result = (int)$Price * (int)$Discount / 100;
        $Currency = "$"; # يمكنك تغيير العملة 

        echo "<center>";
        echo "<h2> سعر المنتج :" . $Price . $Currency; 
        echo "<h2> نسبة التخفيض هي : " . $Discount . "%";
        if ((int)$Price - $Result == 0) {  #  في حالة اصبح المنتوج سعره 0 يصبح المنتوج مجاني 
            echo "<h2>المنتوج اصبح مجاني";
        } else {
            echo "<h2> سعر المنتج بعد التخفيض هو : " . $Price - $Result . $Currency; 
        }
        echo "<h2> المبلغ الذي تم خصمه هو : " . $Result . $Currency;
        echo "</center>";
    }
     ?>
</body>
</html>
