<?php
    session_start();
    require_once( 'database.php' );

    $link = mysqli_connect( $host, $user, $password, $dataBase )
        or die( "Error: " . mysqli_error( $link ) );
    
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];

    $query = "SELECT * FROM `clients`";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    $count = 0;
        
    while( $row = mysqli_fetch_array( $result ) ) {
        if( $row['useremail'] == $userEmail && $row['userpassword'] == $userPass ) {
            header( 'Location: ../admin.php' );
            echo 'success';
            $_SESSION['userID'] = $row['userID'];
            $count++;
        }
    }

    if( $count == 0 ) {
        header( 'Location: ../index.php' );
    }
?>