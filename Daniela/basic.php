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

<p>BASIC TWO</p>


<?php
       function addFunction($num1, $num2)
       {
           $sum = $num1 / $num2;
           return  $sum;
       }
       $return_value = addFunction(55, 5);
       echo "Number 55 divided by number 5 is : $return_value";
       ?>




</body>
</html>