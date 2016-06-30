<?php
/**
 * Created by PhpStorm.
 * User: mitchellvervloet
 * Date: 29-06-16
 * Time: 17:07
 */

// include_once ('');

if(isset($_GET['id'])){

    $id = $_GET['id'];

    //kijken of id in database zit
    $query = "SELECT * FROM coupe WHERE treinNummer='".$_GET['id']."'";
    $sql = mysqli_query($db, $query);

    $trein = $_GET['id'];

//    while($row=mysqli_fetch_assoc($sql)){
//
//        $coupeId=$row['id'];
//
//    }



} else {

    echo 'Data verwerking is mislukt!';
    exit();
}
