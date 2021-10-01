<?php
    session_start();
    require_once( 'database.php' );

    $link = mysqli_connect( $host, $user, $password, $dataBase )
        or die( "Error: " . mysqli_error( $link ) );
    
    $print = $_POST['print'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $printName = $_POST['printName'];

    $query = "INSERT INTO `bags` (`print`, `size`, `price`, `printName`) VALUES ( '$print', '$size', '$price', '$printName' )";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    header( 'Location: ../makeOrder.php' );
?>