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
        if( $userEmail == "kamila@master.com" && $userPass == "bakisheva" ) {
            $_SESSION['admin'] = true;
            $_SESSION['inSystem'] = true;
            // $_SESSION['userName'] = $row['username'];
            header( 'Location: ../admin.php' );
            $count++;
        } else if( $row['useremail'] == $userEmail && $row['userpassword'] == $userPass ) {
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['inSystem'] = true;
            $_SESSION['userName'] = $row['username'];
            header( 'Location: ../makeOrder.php' );
        }
    }

    if( $count == 0 ) {
        header( 'Location: ../index.php' );
    }
?>