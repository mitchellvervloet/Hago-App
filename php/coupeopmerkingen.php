<?php
/**
 * Created by PhpStorm.
 * User: mitchellvervloet
 * Date: 29-06-16
 * Time: 19:33
 */
include_once ('');

if(isset($_POST['submit'])) {

    $stoelen = (isset($_POST['stoelen'])) ? 1 : 0;
    $prullenbakken = (isset($_POST['prullenbakken'])) ? 1 : 0;
    $vlekken = (isset($_POST['vlekken'])) ? 1 : 0;
    $ramen = (isset($_POST['ramen'])) ? 1 : 0;

    print_r($stoelen);


    if (empty($_POST['opmerking'])) {
        $query = ("UPDATE coupe SET cleaned = 1 , stoelen = 1, prullenbakken = 1, vlekken =1, ramen = 1 WHERE id = 4");
        $sql = mysqli_query($db, $query) or die(mysqli_connect_error($db));

    } else {

//        $query = ("UPDATE coupe
//                             SET cleaned = 1, stoelen = '".$_POST['stoelen']."', prullenbakken = '".$_POST['prullenbakken']."', vlekken = '".$_POST['vlekken']."', ramen = '".$_POST['ramen']."'
//                              WHERE id = 4");

        $query = ("UPDATE coupe SET cleaned = 1 , stoelen = 1, prullenbakken = 1, vlekken =1, ramen = 1 WHERE id = 4");
        $query2 = ("INSERT INTO opmerkingen
                              (coupeId, opmerking, tijd)
                              VALUES
                              ('4',
                                '" . $_POST['opmerking'] . "',
                                CURTIME())");
        $sql = mysqli_query($db, $query2) or die(mysqli_connect_error());

        $sql2 = mysqli_query($db, $query) or die(mysqli_connect_error());
    }

}

//if(isset($_GET['id'])){
//
//    $id = $_GET['id'];
//
//    //kijken of id in database zit
//    $query = ("SELECT * FROM coupe WHERE treinNummer='". $_GET['id']."' ");
//    $sql = mysqli_query($db, $query) or die(mysqli_connect_error());
//
//    $trein = $_GET['id'];
//
//
//    $query2 = ("SELECT * FROM opmerkingen WHERE coupeId='". $coupeId."' ");
//    $sql2 = mysqli_query($db, $query2) or die(mysqli_connect_error());
//
////    $trein = $_GET['id'];
//
//
//
//
//
//} else {
//
//    echo 'Data verwerking is mislukt!';
//    exit();
//}