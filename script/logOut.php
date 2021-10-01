<?php
    session_start();
    unset( $_SESSION['inSystem'] );
    if( isset( $_SESSION['admin'] ) ) {
        unset( $_SESSION['admin'] );
    }
    header( 'Location: ../index.php' );
?>