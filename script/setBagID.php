<?php
    session_start();

    $_SESSION['bagID'] = $_POST['bagID'];

    header( 'Location: ../order.php' );
?>