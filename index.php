<?php

// function familyName(){

// echo "lucky  precious";

// }



?> 

<?php

function familyName( string $fname, string $lname= 'precious'){

echo "$fname  $lname";

}

function sum(int $num1, int $num2){
    return $num1 + $num2;
}

$genderString = "i am a ";

function female ($str)
{
$str .="female";
}

function male(&$str)
{
    $str .="male";
}

female($genderString);
male($genderString);

echo $genderString . "<br>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>family</h1>
<ul>
    <li><?php familyName("kodes"); ?>
    <li><?php familyName("emanuel"); ?>
    <li><?php familyName("peter"); ?>
    <li><?php familyName("jude"); ?>
    <li><?php familyName("innocent", "elipha"); ?>

</li>
</ul>
<p> The sum of 5 and 10 is: <?php echo sum(5, 10);?></p>
<p> The sum of 20 and 10 is: <?php echo sum(20, 10);?></p>
<p> The sum of 13 and 10 is: <?php echo sum(13, 10);?></p>

<br>

</body>
</html>