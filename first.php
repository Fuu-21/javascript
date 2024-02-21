<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hello world</title>
</head>
<body>
    <h1>PHP simple example</h1>
    <?php echo"Hello World! <br>";?>
    <!-- comment garey hai-->
    <!-- // variables -->
    <!--  $var_name = value; -->
    <!-- eg
            < ?php
        $name = "Sita Rai";
        $address = "Dhankuta";
        $age = 25;
        $weight = 44.5;
            ?>                   
    -->

     <!-- PHP is case sensitive $age, $Age, $AGE is different and is highly inspiref from C language -->
    <!-- PHP string
            $a = "Hello World!" 
    $var1="Ram";
    echo"HEllo $var1";  //output: HEllo Ram
    echo 'Hello $var1'; //Output:Hello $var1
        
    -->
    <?php $var1="Ram<br>";
    echo"HEllo $var1 <br>";  //output: HEllo Ram
    echo 'Hello $var1'; //Output:Hello $var1 
    echo"K cha Haal Khabar? <br>";

    $txt = "PHP";
    echo" I love $txt <br>";
    define("Thank_msg","THank you for chosing ABC.com <br>");
    echo Thank_msg;
    ?>

    <?php 
    $x = 10;
    echo $x += 30 ;
    echo"<br>";
    $y = 5;
    echo $x+$y;
    if($x>$y){
        echo" <br>x is bigger than y";
    }
    ?>
    
</body>
</html>