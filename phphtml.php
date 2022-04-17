<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;

        }
         th{
            color: white;
            background-color: #4169E1;
         }
         td{
             color: black;
             background-color: #B0E0E6;
         }
    </style>
</head>
<body>
    <table  width="50%" border="2">
        <tr>
            <th><a href="x1.php"><h2><ins>1 جدول ضرب رقم</ins></h2></a></th>
            <th><a href="x2.php"><h2><ins>2 جدول ضرب رقم</ins></h2></a></th>
            <th><a href="x3.php"><h2><ins>3 جدول ضرب رقم</ins></h2></a></th>
        

        </tr>
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 1 ;
    echo"<h3><strong>$counter x 1 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 2 ;
    echo"<h3><strong>$counter x 2 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 3 ;
    echo"<h3><strong>$counter x 3 = $res</strong><hr></h3>";
    $counter++;
}

?> </td>
        </tr>
        <tr>
        <th><a href="x4.php"><h2><ins>4 جدول ضرب رقم</ins></h2></a></th>
        <th><a href="x5.php"><h2><ins>5 جدول ضرب رقم</ins></h2></a></th>
        <th><a href="x6.php"><h2><ins>6 جدول ضرب رقم</ins></h2></a></th>
        </tr>
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 4 ;
    echo"<h3><strong>$counter x 4 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 5 ;
    echo"<h3><strong>$counter x 5 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 6 ;
    echo"<h3><strong>$counter x 6 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
        </tr>
        <tr>
        <th><a href="x7.php"><h2><ins>7 جدول ضرب رقم</ins></h2></a></th>
        <th><a href="x8.php"><h2><ins>8 جدول ضرب رقم</ins></h2></a></th>
        <th><a href="x9.php"><h2><ins>9 جدول ضرب رقم</ins></h2></a></th>
        </tr>
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 7 ;
    echo"<h3><strong>$counter x 7 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 8 ;
    echo"<h3><strong>$counter x 8 = $res</strong><hr></h3>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 9 ;
    echo"<h3><strong>$counter x 9 = $res </strong><hr></h3>";
    $counter++;
}

?></td>
        </tr>
    </table>
</body>
<a href="multiplist.php">

<h1> click here to go back! </h1>
</a>
</html>