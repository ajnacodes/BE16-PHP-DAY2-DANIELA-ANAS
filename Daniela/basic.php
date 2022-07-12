<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
<!-- 
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
     

       ?> -->







<!-- Exercise five -->

<!-- <p>BASIC FIVE</p>



<?php





function convertToHoursMins($time, $format = '%02d:%02d') {
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}

echo  " 200 minutes is <br/> ". convertToHoursMins(200, '%02d hours %02d minutes'); 

       ?> -->


<!-- IRATI VERSION -->


<!-- 
<?php
function convertMinsToHours($time) {
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf('%02d hours %02d minutes', $hours, $minutes);
}
echo  " 200 minutes is <br/> ". convertMinsToHours(200); 
       ?> -->


<!-- Exercise six -->

<p>BASIC SIX</p>



<form method="POST" action="basic.php">
  First name: <input type="text" name="fName">
  Last name: <input type="text" name="lName">
  Age: <input type="text" name="age">
  Hobbies: <input type="text" name="hobbies">
  
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $age = $_POST['age'];
  $hobbies = $_POST['hobbies'];
  if (empty($lName) || empty($lName) || empty($age)) {
    echo "Please fill out all the fields.";
  } else if(strlen($lName)  > 5 || strlen($fName)  > 5 ) {
    echo "
    <div class='card m-5 p-1' style='width: 18rem;'>
  <div class='card-body'>
    <h6 class='card-subtitle mb-2  text-danger'>$fName $lName</h6>
    <p class='card-text'>This person is $age years old, and his/her hobbies are: $hobbies.</p>
  </div>
</div>
    ";
  } else  if (strlen($lName)  <= 5 || strlen($fName)  <= 5 ){
    echo "
    <div class='card m-5 p-1' style='width: 18rem;'>
  <div class='card-body'>
    <h6 class='card-subtitle mb-2  text-success'>$fName $lName</h6>
    <p class='card-text'>This person is $age years old.</p>
    <p class='card-text'>This person is $age years old, and his/her hobbies are: $hobbies.</p>
  </div>
</div>
    ";
  }
};


echo "



"

?>










       <!-- <form action="basic.php" method ="GET">
           First name: <input type="text"  name="fName" />
           Last name: <input type ="text" name="lName" />
           Age: <input type="text"  name="age" />
           <input  type="submit" name="submit"  />
       
       <form action="basic.php" method ="POST">
       Hobbies: <input type ="text" name="hobbies" />
       </form>
       <?php
       if( isset($_GET['submit']))
       {
           if( $_GET["fName"] || $_GET["lName"] )
           {
               echo "Welcome ". $_GET[ "fName"] .$_GET["lName"]. "<br />";
            
           }else if (empty($_GET["fName"] || $_GET["lName"]))
           {
            echo "Please fill in your name and surname.";
           }
       };

       ?>  -->


</body>
</html>