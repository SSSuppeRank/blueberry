<?php
    session_start();
    require_once( 'database.php' );

    $link = mysqli_connect( $host, $user, $password, $dataBase )
        or die( "Error: " . mysqli_error( $link ) );
    
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPass1 = $_POST['userPass1'];
    $userPass2 = $_POST['userPass2'];

    if( $userPass1 == $userPass2 ) {
        $query = "INSERT INTO `clients` (`username`, `useremail`, `userpassword`) VALUES ('$userName', '$userEmail', '$userPass1')";
        $result = mysqli_query( $link, $query );
        header( 'Location: ../index.php' );
        $_SESSION['registered'] = true;
    } else {
        $_SESSION['registered'] = false;
        header( 'Location: ../index.php' );
    }
?>