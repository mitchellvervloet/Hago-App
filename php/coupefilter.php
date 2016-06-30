<?php
/**
 * Created by PhpStorm.
 * User: mitchellvervloet
 * Date: 29-06-16
 * Time: 22:48
 */


if(isset($_GET['id'])){

    $id = $_GET['id'];

    //kijken of id in database zit
    $query = "SELECT * FROM coupe WHERE id='". $_GET['id']."' ";
    $sql50 = mysqli_query($db, $query) or die(mysqli_connect_error());

    $query2 = "SELECT * FROM coupe WHERE id='". $_GET['id']."' ";
    $sql2 = mysqli_query($db, $query2) or die(mysqli_connect_error());

//    $row = mysqli_fetch_assoc($sql);

//    $coupe = $row['coupeId'];

//    while($row=mysqli_fetch_assoc($sql)){
//
//        $coupeId=$row['id'];
//
//    }



} else {

    echo 'Data verwerking is mislukt!';
    exit();
}
