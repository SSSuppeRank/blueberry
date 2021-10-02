<?php
    require_once( 'database.php' );

    $query = "SELECT * FROM `feedbacks`";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    while( $row = mysqli_fetch_array( $result ) ) {
        $userID = $row['userID'];
        $query = "SELECT `username` FROM `clients` WHERE `userID` = '$userID'";
        $queryResult = mysqli_query( $link, $query )
            or die( "Error: " . mysqli_error( $link ) );

        $username = mysqli_fetch_array( $queryResult )['username'];

        echo '<div class="card mt-5">';
        echo '<div class="card-header">';
        echo $username . ' at ' . $row['feedbackDate'];
        echo '</div>';
        echo '<div class="card-body">';
        echo '<p class="card-text">' . $row['feedback'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
?>