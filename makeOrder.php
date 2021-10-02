<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/style.css">
    <title>Document</title>
    <?php
        session_start();

        if( isset( $_SESSION['orderFail'] ) ) {
            echo '<script>';
            echo 'alert("You are not registered in the system");';
            echo '</script>';
            
            unset( $_SESSION['orderFail'] );
        }
        if( isset( $_SESSION['successOrder'] ) ){
            echo '<script>';
            echo 'alert("You have successfully sent your order");';
            echo '</script>';
            
            unset( $_SESSION['successOrder'] );
        }
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Blueberry shoppers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="makeOrder.php">Make order</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="feedback.php">Feedback</a>
                </li>
                <?php
                    if( isset( $_SESSION['admin'] ) && $_SESSION['admin'] == true ) {
                        echo '<li class="nav-item">';
                        echo '<a class="nav-link" href="admin.php">Admin</a>';
                        echo '</li>';
                    }
                ?>
            </ul>
            <form class="d-flex" action="script/logOut.php">
                <?php
                    if( isset( $_SESSION['inSystem'] ) && $_SESSION['inSystem'] == true ) {
                        // echo '<form class="d-flex" >';
                        echo '<div class="display-6">';
                        echo $_SESSION['userName'];
                        echo '</div>';
                        echo '<button type="submit" class="btn btn-outline-dark">';
                        echo 'Log out';
                        echo '</button>';
                        // echo '</form>'; 
                    } else {
                        echo '<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#SignUp">';
                        echo 'Sign up';
                        echo '</button>';
                        echo '<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#LogIn">';
                        echo 'Log in';
                        echo '</button>';
                    }
                ?>
            </form>
            </div>
        </div>
    </nav>

    <!-- order table -->
    <?php
        require_once( 'content/orderTable.php' );
    ?>
    
    <!-- modals -->
    <?php
        require_once( 'modals/logInModal.php' );
        require_once( 'modals/signUpModal.php' );
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>