<?php
/**
 * Created by PhpStorm.
 * User: mitchellvervloet
 * Date: 29-06-16
 * Time: 17:10
 */

include_once ('php/init.php');

include_once('php/treinfilter.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hago Rails - App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/trein.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

<!--<div class="col-md-3"></div>-->
<div class="screen col-md-12">

    <div class="title col-md-12">
        <h1>Trein <?php echo $trein; ?></h1>
    </div>

    <div class="coupes col-md-12">

<!--        <div class="coupe">-->
<!--            <div class="coupe-middle">-->
<!--                <div class="opmerkingen-circle"><p>5</p></div>-->
<!--                <input type="checkbox" name="stoelen" class="checked_stoelen" >-->
<!--                <img class="checked" src="img/checked.png">-->
<!--                <img class="checked" src="img/checked.png">-->
<!--                <img class="checked" src="img/checked.png">-->
<!--                <img class="checked" src="img/checked.png">-->
<!--            </div>-->
<!--        </div>-->

        <?php

        while ($row = mysqli_fetch_assoc($sql)){


            $coupeId = $row['id'];

//            $result=mysql_query("SELECT count(*) as total from Students");

            $query2 = "SELECT count(*) as total FROM opmerkingen WHERE coupeId='". $coupeId."' ";
            $sql2 = mysqli_query($db, $query2) or die(mysqli_connect_error());
//            $result = mysqli_fetch_assoc($sql2);

//            print_r($result);
            echo "<a href='coupe.php?id=".$row['id']."'>";
            echo "<div class='coupe'>";
            echo    "<div class='coupe-middle'>";

            if($row['cleaned']){
                echo        "<div class='coupe-groen'><p>Coupé " .$row['coupeNummer']. "</p></div>";
            } else {
                echo        "<div class='coupe-rood'><p>Coupé " .$row['coupeNummer']. "</p></div>";
            }

            while ($row2 = mysqli_fetch_array($sql2)){
                if($row2['total']>0){
                    echo "<div class='opmerkingen-circle'><p>" .$row2['total']. "</p></div>";
                } else {
//                echo "<img class='unchecked' src='img/unchecked.png'>";
                }
            }



            if($row['stoelen']){
                echo "<img class='checked' src='img/checked.png'>";
            } else {
                echo "<img class='unchecked' src='img/unchecked.png'>";
            }
            if($row['prullenbakken']){
                echo "<img class='checked' src='img/checked.png'>";
            } else {
                echo "<img class='unchecked' src='img/unchecked.png'>";
            }
            if($row['vlekken']){
                echo "<img class='checked' src='img/checked.png'>";
            } else {
                echo "<img class='unchecked' src='img/unchecked.png'>";
            }
            if($row['ramen']){
                echo "<img class='checked' src='img/checked.png'>";
            } else {
                echo "<img class='unchecked' src='img/unchecked.png'>";
            }

//            while ($row2 = mysqli_fetch_assoc($sql2)){
//                echo "<p>" .$row2['opmerking']. "</p>";
//            }

            echo     "</div>";
            echo "</div>";
            echo "</a>";

        }

        ?>
    </div>




    <div class="menu col-md-12">
        <a href="treinen.html" ><button type="button" class="btn btn-lg">
                <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
            </button></a>
        <a href="index.html" ><button type="button" class="btn btn-lg">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button></a>
        <a href="treinen.html" ><button type="button" class="btn btn-lg">
                <i class="fa fa-train" style="font-size:30px;" aria-hidden="true"></i>
            </button></a>
        <a href="scan.html" ><button type="button" class="btn btn-lg">
                <i class="fa fa-qrcode" style="font-size:30px;" aria-hidden="true"></i>
            </button></a>
    </div>

</div>


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
