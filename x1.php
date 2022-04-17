<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 جدول ضرب رقم</title>
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
<table  width="20%" border="2">
        <tr>
            <th><h2><ins>1 جدول ضرب رقم</ins></h2></th>
        </tr>    
        <tr>
            <td><?php
$counter=1;
while($counter<= 10){
   $res=$counter * 1 ;
    echo"<h2><strong> 1 x $counter = $res</strong></h2>";
    $counter++;
}

?>
<a href="multiplist.php">

<h1> click here to go back! </h1>
</a>

</td>
<br> 
</body>
</html>