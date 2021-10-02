<?php
    session_start();
    require_once( 'database.php' );

    $address = $_POST['address'];
    $userID = $_SESSION['userID'];
    $bagID = $_SESSION['bagID'];

    $query = "INSERT INTO `orders` (`address`, `userID`, `bagID`) VALUES ('$address', '$userID', '$bagID')";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    $_SESSION['successOrder'] = true;

    header( 'Location: ../makeOrder.php' );

    mysqli_close( $link );
?>