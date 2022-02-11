<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    <?php
    $arr = array("red","green","yellow","blue","pink","black","white");
    echo "string : ";
    echo "red green yellow blue pink black white"."<br>";
    echo "Expected Value : ";
    for ($i = 6; $i >= 0; $i--){
        echo $arr[$i]." ";
    }
    ?>
</body>

</html>
