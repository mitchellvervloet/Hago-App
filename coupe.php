<?php
/**
* Created by PhpStorm.
* User: mitchellvervloet
* Date: 29-06-16
* Time: 17:10
*/

include_once ('php/init.php');
include_once ('php/coupefilter.php');
include_once('php/opmerking-toevoegen.php');
//include_once ('php/coupescan.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hago Rails - App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/coupe.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

  <!--<div class="col-md-3"></div>-->
  <div class="screen col-md-12">

    <div class="title col-md-12">
      <?php

      while($row = mysqli_fetch_assoc($sql50)){
        $coupe = $row['coupeNummer'];
        $trein = $row['treinNummer'];

        echo "<h1>Trein ".$trein." - Coupé ".$coupe."</h1>";

      }
      ?>

    </div>

    <div class="coupe col-md-12">

      <!--        <div class="coupe-afbeelding col-md-12">-->
      <!--            <img src="img/coupegroen.png" />-->
      <!--        </div>-->
      <!--        <div class="stoelen col-md-12">-->
      <!--            <input class="stoelen-check" type="checkbox">-->
      <!--            <h1>Stoelen</h1>-->
      <!--        </div>-->
      <!--        <div class="stoelen col-md-12">-->
      <!--            <input class="stoelen-check" type="checkbox">-->
      <!--            <h1>Stoelen</h1>-->
      <!--        </div>-->
      <!--        <div class="stoelen col-md-12">-->
      <!--            <input class="stoelen-check" type="checkbox">-->
      <!--            <h1>Stoelen</h1>-->
      <!--        </div>-->
      <!--        <div class="stoelen col-md-12">-->
      <!--            <input class="stoelen-check" type="checkbox">-->
      <!--            <h1>Stoelen</h1>-->
      <!--        </div>-->
      <!--        <div class="opmerkingen col-md-12">-->
      <!--            <div class="opmerkingen-title col-md-12">-->
      <!--                <h1 >Opmerkingen</h1>-->
      <!--            </div>-->
      <!--            <div class="opmerking col-md-12">-->
      <!--                <div class="opmerking-time">-->
      <!--                    <p>12:23:12</p>-->
      <!--                </div>-->
      <!--                <div class="opmerking-text">-->
      <!--                    <h1>Hallo Hallo Hallo Hallo Hallo Hallo Hallo Hallo Hallo Hallo HalloHallo Hallo Hallo.Hallo Hallo Hallo.Hallo Hallo Hallo.Hallo Hallo Hallo..</h1>-->
      <!--                </div>-->
      <!--            </div>-->
      <!--        </div>-->

      <?php

      while ($row = mysqli_fetch_assoc($sql2)){

        $coupeId = $row['id'];

        //            $result=mysql_query("SELECT count(*) as total from Students");

        $query3 = ("SELECT count(*) as total FROM opmerkingen WHERE coupeId='". $coupeId."' ");
        $sql3 = mysqli_query($db, $query3) or die(mysqli_connect_error());

        $query4 = ("SELECT * FROM opmerkingen WHERE coupeId='". $coupeId."' ORDER BY tijd ");
        $sql4 = mysqli_query($db, $query4) or die(mysqli_connect_error());


        $coupeId = $row['id'];

        echo "<div class='coupe-afbeelding col-md-12'>";

        if($row['cleaned']){
          echo "<img src='img/coupegroen.png' />";
        } else {
          echo "<img src='img/couperood.png' />";
        }
        echo "</div>";

        echo "<div class='stoelen col-md-12'>";
        if($row['stoelen']){
          echo "<input name='stoelen' class='stoelen-check' type='checkbox' checked>";
        } else {
          echo "<input name='stoelen' class='stoelen-check' type='checkbox'>";
        }
        echo "<h1>Stoelen</h1>";
        echo "</div>";

        echo "<div class='stoelen col-md-12'>";
        if($row['prullenbakken']){
          echo "<input name='prullenbakken' class='stoelen-check' type='checkbox' checked>";
        } else {
          echo "<input name='prullenbakken' class='stoelen-check' type='checkbox'>";
        }
        echo "<h1>Prullenbakken</h1>";
        echo "</div>";

        echo "<div class='stoelen col-md-12'>";
        if($row['vlekken']){
          echo "<input name='vlekken' class='stoelen-check' type='checkbox' checked>";
        } else {
          echo "<input name='vlekken' class='stoelen-check' type='checkbox'>";
        }
        echo "<h1>Vlekken</h1>";
        echo "</div>";

        echo "<div class='stoelen col-md-12'>";
        if($row['ramen']){
          echo "<input name='ramen' class='stoelen-check' type='checkbox' checked>";
        } else {
          echo "<input name='ramen' class='stoelen-check' type='checkbox'>";
        }
        echo "<h1>Ramen</h1>";
        echo "</div>";

        while($row2 = mysqli_fetch_assoc($sql3)){
          if($row2['total']>0){
            //                    echo "<div class='opmerkingen-circle'><p>" .$row2['total']. "</p></div>";
            echo "<div class='opmerkingen col-md-12'>";
            echo    "<div class='opmerkingen-title col-md-12'>";
            echo        "<h1 >Opmerkingen</h1>";
            echo    "</div>";

            while($row3 = mysqli_fetch_assoc($sql4)){
              echo    "<div class='opmerking col-md-12'>";
              echo        "<div class='opmerking-time'>";
              echo            "<p>".$row3['tijd']."</p>";
              echo        "</div>";
              echo        "<div class='opmerking-text'>";
              echo            "<h1>".$row3['opmerking']."</h1>";
              echo        "</div>";
              echo    "</div>";
            }

            echo "</div>";
            //
          } else {
            //                echo "<img class='unchecked' src='img/unchecked.png'>";
          }
        }

      }

      ?>

      <div class="opmerking-toevoegen col-md-12">
        <form action="coupe.php?id=<?php echo $coupeId; ?>" method="post" >
          <input class="text-field" type="text" placeholder="Plaats uw opmerking hier" name="opmerking"/>
          <button formaction='' class="submit-button" type="submit" name="submit" >Plaats opmerking</button>
        </form>

      </div>

    </div>




    <div class="menu col-md-12">
      <a href="trein.php?id=<?php echo $trein; ?> " ><button type="button" class="btn btn-lg">
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
