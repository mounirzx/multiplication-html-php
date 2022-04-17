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
            background-color: green;
         }
         td{
             color: white;
             background-color: black;
         }
    </style>
</head>
<body>
    <table  width="50%" border="2">
        <tr>
            <th><h2><ins>1 جدول ضرب رقم</ins></h2></th>
            <th><h2><ins>2 جدول ضرب رقم</ins></h2></th>
            <th><h2><ins>3 جدول ضرب رقم</ins></h2></th>
        

        </tr>
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 1 ;
    echo"<h4>$counter x 1 = $res<hr></h4>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 2 ;
    echo"<h4>$counter x 2 = $res<hr></h4>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 3 ;
    echo"<h4>$counter x 3 = $res<hr></h4>";
    $counter++;
}

?> </td>
        </tr>
        <tr>
            <th><h2><ins>4 جدول ضرب رقم</ins></h2></th>
            <th><h2><ins>5 جدول ضرب رقم</ins></h2></th>
            <th><h2><ins>6 جدول ضرب رقم</ins></h2></th>
        </tr>
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 4 ;
    echo"<h4>$counter x 4 = $res<hr></h4>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 5 ;
    echo"<h4>$counter x 5 = $res<hr></h4>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 6 ;
    echo"<h4>$counter x 6 = $res<hr></h4>";
    $counter++;
}

?></td>
        </tr>
        <tr>
            <th><h2><ins>7 جدول ضرب رقم</ins></h2></th>
            <th><h2><ins>8 جدول ضرب رقم</ins></h2></th>
            <th><h2><ins>9 جدول ضرب رقم</ins></h2></th>
        </tr>
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 7 ;
    echo"<h4>$counter x 7 = $res<hr></h4>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 8 ;
    echo"<h4>$counter x 8 = $res<hr></h4>";
    $counter++;
}

?></td>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 9 ;
    echo"<h4>$counter x 9 = $res <hr></h4>";
    $counter++;
}

?></td>
        </tr>
    </table>
</body>
</html>