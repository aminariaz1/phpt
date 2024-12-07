<?php
$name = "Amina";
$income = 200000000000;

echo " $name  income is $income <br>";
echo " $name  is a good and intelligent girl  <br>";
echo " $income  is not enough <br>";
?>

<?php
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
?>

<?php
echo "<br>";
$animals = array("snakes", "lizards", "dogs", "Humans");
echo var_dump($animals);
echo "<br>";
echo $animals[0];
echo "<br>";
echo $animals[1];
echo "<br>";
echo $animals[2];
echo "<br>";
echo $animals[3];
?>

<?php
echo "<br>";
$name = "Amina is a good girl";
echo $name;
echo "<br>";
echo  "The length " . "of my string is" .  strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "a");
echo "<br>";
echo str_replace("Amina", "Hina", $name);
echo "<br>";
echo str_repeat(
    $name,
    5
);
echo "<br>";
echo "<pre>";
echo rtrim("     this is a good boy    ");
echo "<br>";
echo ltrim("     this is a good boy     ");
?>


 <?php
    // arithematic operators
    $a = 5;
    $b = 10;
    echo ($a + $b);
    echo "<br>";
    echo ($a - $b);
    echo "<br>";
    echo ($a * $b);
    echo "<br>";
    echo ($a / $b);
    echo "<br>";
    echo ($a % $b);
    echo "<br>";
    echo ($a ** $b);
    ?>
 
 <?php
    // Assignment operators
    $a = 5;
    $b = 10;
    $x = $a;
    echo $x;
    echo "<br>";
    $a += 6;
    echo $a;
    echo "<br>";
    $a -= 6;
    echo $a;
    echo "<br>";
    $a *= 6;
    echo $a;
    echo "<br>";
    $a /= 6;
    echo $a;
    echo "<br>";
    $a %= 6;
    echo $a;
    ?>

  <?php
    //comparision operators
    $a = 5;
    $b = 10;
    echo "<br>";
    echo var_dump($a < $b);
    echo "<br>";
    echo var_dump($a > $b);
    echo "<br>";
    echo var_dump($a == $b);
    echo "<br>";
    echo var_dump($a <= $b);
    echo "<br>";
    echo var_dump($a >= $b);
    echo "<br>";
    echo var_dump($a <> $b);
    ?>

<?php
$m = false;
$n = true;
echo "for m and n the result is ";
echo var_dump($m and $n);
echo "<br>";
echo "for m or n the result is ";
echo var_dump($m or $n);
echo "<br>";
echo "for !m and n the result is ";
echo var_dump(!$m);
echo "<br>";
echo "for m and !n the result is ";
echo var_dump(!$n);
?>

<?php
$c = 78;
$d = 7;
if ($c > 68) { 
    echo "c is greater than 78";
} else {
    echo "c is greater than 78";
}
echo "<br>";
echo "<br>";
if ($c > 98) { 
    echo "c is greater than 58";
} elseif ($c <= 78) {
    echo "c is equal to b";
} else {
    echo "c is greater than 78";
}
?>

<?php
echo "<br>";
$age = 47;
switch ($age) {
    case 12:
        echo "you are 12 year old";
        echo "<br>";
    case 22:
        echo "you are 22 year old";
        echo "<br>";
    case 47:
        echo "you are 47 year old";
        echo "<br>";
    case 68:
        echo "you are 68 year old";
        echo "<br>";
        default:
        echo "you are wired";
        break;   
}
?>

<?php
$i=1;
while ($i < 5){
    echo $i;
    echo "<br>";
    $i++;
}
?>

<?php
for ($i=0; $i<5; $i++){
echo "the num is $i <br>";
}
/*for ($i=0; $i<8;){
    echo "the num is $i <br>";
    }*/
?>

<?php
$i=0;
do{
    echo "$i <br>";
    $i++;
}
while($i<5);
?>

<?php
$arr = array("banana", "orange", "gavava","apple");
foreach ($arr as  $value) {
    echo "$value <br>";
}
?>