<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Exercises</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    






<!-- Advanced one -->


<p class="m-5 p-5" >FAHRENHEIT TO CELSIUS</p>


<?php




$fahrenheit = 90;
$celsius = (($fahrenheit - 32) * 5) / 9;
$celsius = round($celsius, 3);
if ($celsius <= 5) {
    echo "
    <div class='card m-5' style='width: 18rem;'>
    <img src='https://cdn.pixabay.com/photo/2015/02/12/14/57/frost-633821_1280.jpg' class='card-img-top'>
    <div class='card-body'>
      <p class='card-text text-center text-muted'>It is very cold. Temperature is $celsius.</p>
    </div>
    </div>
    ";
} else if ($celsius >= 6 && $celsius <= 10) {
    echo "
    <div class='card m-5' style='width: 18rem;'>
    <img src='https://cdn.pixabay.com/photo/2019/06/29/17/35/tree-4306636_1280.jpg' class='card-img-top'>
    <div class='card-body'>
      <p class='card-text text-center text-muted'>It is cold. Temperature is $celsius.</p>
    </div>
    </div>
    ";
} else if ($celsius >= 11 && $celsius <= 15) {
    echo "
    <div class='card m-5' style='width: 18rem;'>
    <img src='https://cdn.pixabay.com/photo/2017/06/30/22/12/landscape-2459981_1280.jpg' class='card-img-top'>
    <div class='card-body'>
      <p class='card-text text-center text-muted'>It is pleasant. Temperature is $celsius.</p>
    </div>
    </div>
    ";
}  else if ($celsius >= 16 && $celsius <= 20) {
    echo "
    <div class='card m-5' style='width: 18rem;'>
    <img src='https://cdn.pixabay.com/photo/2018/04/12/15/00/sun-3313646_1280.jpg' class='card-img-top'>
    <div class='card-body'>
      <p class='card-text text-center text-muted'>It is warm. Temperature is $celsius.</p>
    </div>
    </div>
    ";
} else if ($celsius > 20) {
    echo "
    <div class='card m-5' style='width: 18rem;'>
    <img src=' https://img.freepik.com/premium-photo/nature-landscape-view-beautiful-tropical-beach-sea-sunny-day-beach-sea-space-area_63047-2026.jpg' class='card-img-top'>
    <div class='card-body'>
      <p class='card-text text-center text-muted'>It is hot. Temperature is $celsius.</p>
    </div>
    </div>
    ";
}

 
    



//  https://img.freepik.com/premium-photo/nature-landscape-view-beautiful-tropical-beach-sea-sunny-day-beach-sea-space-area_63047-2026.jpg

// round() is used to limit the number of digit after the decimal

?>







</body>
</html>