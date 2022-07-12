<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Exercises</title>
</head>
<body>
    



<!-- Exercise one -->
<!-- 
<p>BASIC ONE</p>
       <form action="basic.php" method ="GET">
           Name: <input type="text"  name="name" />
           Surname: <input type ="text" name="surname" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       if( isset($_GET['submit']))
       {
           if( $_GET["name"] || $_GET["surname"] )
           {
               echo "Welcome ". $_GET[ "name"] .$_GET["surname"]. "<br />";
            
           }else if (empty($_GET["name"] || $_GET["surname"]))
           {
            echo "Please fill in your name and surname.";
           }
       };

       ?> -->






<!-- Exercise two -->

<!-- <p>BASIC TWO</p> -->

<!-- 
<?php
       function divideFunction($num1, $num2)
       {
           $sum = $num1 / $num2;
           return  $sum;
       }
       $return_value = divideFunction(55, 5);
       echo "Number 55 divided by number 5 is : $return_value";
       ?>

 -->




 
<!-- Exercise three -->
<!-- 
<p>BASIC THREE</p>


<?php
       function sumGrades($Math, $Physics, $English)
       {
           $sum = $Math + $Physics + $English;
           return  $sum;
       }
       $return_value = sumGrades(3, 4, 5);
       echo "Sum: $return_value";
       echo "<br/>";
       $average = $return_value / 3;
       echo "Average: $average";
       ?>

 -->



 
<!-- Exercise four -->

<p>BASIC FOUR</p>


<?php

function areaOrVolume($Width, $Height, $Length)
{

    $volume = $Length * $Width * $Height;
    return  $volume;


}
$returnArea = areaOrVolume( 2, 4, 1);

echo "Width = 2
<br/>  Height = 4 
<br/>Volume = 10";
echo "<br/>";
echo "<br/>";

echo "The area of the box is " .$returnArea;
echo "<br/>";
echo "<br/>";


$returnVolume = areaOrVolume( 2, 4, 10);

echo "The volume of the box is " .$returnVolume;
echo "<br/>";
     

       ?>




</body>
</html>