<!DOCTYPE html>
<html>

<head>
    <title>php04</title>
</head>

<body>
    <?PHP
        $str = "Software Engineering";
        $str_arr = array(); 
        foreach(str_split($str) as $value){ 
            if(!empty($str_arr[$value])){ 
                $str_arr[$value]++;  
            }else{
                $str_arr[$value] = 1; 
            }
        }
        $max_val = max($str_arr);
        $max_chr = array_search(max($str_arr), $str_arr);
        echo "String : $str"."<br>";
        echo "Largest Character : $max_val";
        echo "<br>"."For the Character : $max_chr"; 

    ?>
</body>

</html>