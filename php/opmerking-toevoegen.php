<?php
/**
* Created by PhpStorm.
* User: mitchellvervloet
* Date: 30-06-16
* Time: 10:29
*/
error_reporting(E_ALL);
if(isset($_POST['submit'])) {

  $stoelen = ( isset($_POST['stoelen']) ) ? 1 : 0;
  $prullenbakken = ( isset($_POST['prullenbakken']) ) ? 1 : 0;
  $vlekken = ( isset($_POST['vlekken']) ) ? 1 : 0;
  $ramen = ( isset($_POST['ramen']) ) ? 1 : 0;
  if(empty($_POST['opmerking'])){
    $query = ("UPDATE coupe SET cleaned = 1 , stoelen = ".$stoelen.", prullenbakken = ".$prullenbakken.", vlekken = ".$vlekken.", ramen = ".$ramen." WHERE id = 4");
    $sql = mysqli_query($db, $query)or die(mysqli_connect_error($db));
    header('location: http://school.dev/hagoApp/coupe.php?id=4');
  } else {
    $query2 = ("UPDATE coupe SET cleaned = 1 , stoelen = ".$stoelen.", prullenbakken = ".$prullenbakken.", vlekken = ".$vlekken.", ramen = ".$ramen." WHERE id = 4");
    $sql = mysqli_query($db, $query2)or die(mysqli_connect_error($db));
    $query = "INSERT INTO opmerkingen
    (coupeId, opmerking, tijd)
    VALUES
    ('".$_GET['id']."',
    '".$_POST['opmerking']."',
    CURTIME())";
    $sql = mysqli_query($db, $query)or die(mysqli_connect_error());
    header('location: http://school.dev/hagoApp/coupe.php?id=4');
  }




  //    $query3 = ("SELECT * FROM coupe WHERE id='". $_GET['id']."' ");
  //    $sql3= mysqli_query($db, $query3) or die(mysqli_connect_error());
  //
  //    if($_POST['opmerking'] = '') {
  //
  //        if($row3=mysqli_fetch_assoc($sql3)){
  //
  //            $query2 = "INSERT INTO coupe
  //                              (coupeNummer, treinNummer, cleaned, stoelen, prullenbakken, vlekken, ramen)
  //                              VALUES
  //                              ('".$row3['coupeNummer']."',
  //                                '".$row3['treinNummer']."',
  //                                '".$_POST['stoelen']."',
  //                                '".$_POST['prullenbakken']."',
  //                                '".$_POST['vlekken']."',
  //                                '".$_POST['ramen']."',)";
  //            $sql2 = mysqli_query($db, $query2)or die(mysqli_connect_error());
  //
  //        }
  //
  //    } else {
  //
  //
  //
  //    }


  //    print_r($_GET['id']);
  //    print_r($_POST['opmerking']);

}
