<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dataBase = 'user';

    $link = mysqli_connect( $host, $user, $password, $dataBase )
        or die( "Error: " . mysqli_error( $link ) );
?>