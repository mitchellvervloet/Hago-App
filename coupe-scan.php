<?php
/**
 * Created by PhpStorm.
 * User: mitchellvervloet
 * Date: 29-06-16
 * Time: 17:10
 */

include_once ('php/init.php');

include_once ('php/coupescan.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hago Rails - App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/coupe-scan.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

<!--<div class="col-md-3"></div>-->
<div class="screen col-md-12">

    <div class="title col-md-12">

        <h1>Trein 491 - Coupé 3</h1>

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



        <div class="opmerking-toevoegen col-md-12">
            <form action="" method="post" role="form">
                <div class='coupe-afbeelding col-md-12'>
                    <img src='img/coupegroen.png' />
                </div>
                <div class='stoelen col-md-12'>
                    <input name='stoelen' class='stoelen-check' type='checkbox' checked>
                    <h1>Stoelen</h1>
                </div>
                <div class='stoelen col-md-12'>
                    <input name='prullenbakken' class='stoelen-check' type='checkbox' checked>
                    <h1>Prullenbakken</h1>
                </div>
                <div class='stoelen col-md-12'>
                    <input name='vlekken' class='stoelen-check' type='checkbox' checked>
                    <h1>Vlekken</h1>
                </div>
                <div class='stoelen col-md-12'>
                    <input name='ramen' class='stoelen-check' type='checkbox' checked>
                    <h1>Ramen</h1>
                </div>
                <input class="text-field" type="text" placeholder="Plaats uw opmerking hier" name="opmerking"/>
                <button formaction='coupe.php?id=4' class="submit-button" type="submit" name="submit" >Bevestig</button>
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
