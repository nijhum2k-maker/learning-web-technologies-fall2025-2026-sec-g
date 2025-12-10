//1
  <br>


<?php
$length = 20;
$width = 15;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of Rectangle = $area <br>";
echo "Perimeter of Rectangle = $perimeter";
?> 
      <br>


//2

    <br>

<?php
$amount = 5000;

$vat = $amount * 0.15;
$total = $amount + $vat;

echo "Amount = $amount <br>";
echo "VAT (15%) = $vat <br>";
echo "Total Amount = $total";
?>
      <br>

    //3
       <br>


<?php
$num = 56;

if ($num % 2 == 0) {
    echo "$num is Even";
} else {
    echo "$num is Odd";
}
?>  
     <br>

     //4
       <br>
<?php
$a = 26;
$b = 25;
$c = 20;

if ($a > $b && $a > $c) {
    echo "Largest number is: $a";
} elseif ($b > $a && $b > $c) {
    echo "Largest number is: $b";
} else {
    echo "Largest number is: $c";
}
?> 
    <br>

    //5
     <br>

<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>
     <br>

   //6
    
     <br>
<?php
$numbers = array(11, 22, 33, 44, 55);
$search = 44;
$found = false;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search is found in the array.";
} else {
    echo "$search is not found in the array.";
}
?>
      <br>

      
// 7
  <br>
<?php

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";


for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";


$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>
     <br>

     

     
   