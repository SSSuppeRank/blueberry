<?php
    session_start();
    
    require_once( 'database.php' );

    $feedback = $_POST['feedbackForm'];
    if( isset( $_SESSION['inSystem'] ) ) {
        $userID = $_SESSION['userID'];
        $_SESSION['feedbackFail'] = false;
    } else {
        $_SESSION['feedbackFail'] = true;
        header( 'Location: ../feedback.php' );
    }

    $query = "INSERT INTO `feedbacks` (`feedback`, `feedbackDate`, `userID`) VALUES ('$feedback', now(), '$userID')";
    $result = mysqli_query( $link, $query ) 
        or die( "Error: " . mysqli_error( $link ) );

    header( 'Location: ../feedback.php' );    

    mysqli_close( $link );
?>