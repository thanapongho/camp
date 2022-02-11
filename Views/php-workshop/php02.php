<!DOCTYPE html>
<html>

<head>
    <title>php02</title>
</head>

<body>
    <?PHP
        $values = 'Software Engineering';
        echo "String : " .$values;
        echo "<br>";
        echo "Expected Value : ";
        echo strtr( $values, "AEIOUaeiou", "xxxxxxxxxx");
    ?>
</body>

</html>
