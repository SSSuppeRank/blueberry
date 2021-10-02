<!-- all orders modal -->
<div class="modal fade" id="seeOrders" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">orders</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <!-- <th scope="col"></th> -->
                            <th scope="col">address</th>
                            <th scope="col">user name</th>
                            <th scope="col">bag print name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once( '../blueberry/script/database.php' );

                            $query = "SELECT * FROM `orders`";
                            $result = mysqli_query( $link, $query ) 
                                or die( "Error: " . mysqli_error( $link ) );

                            $count = 1;

                            while( $row = mysqli_fetch_array( $result ) ) {
                                $userID = $row['userID'];
                                $bagID = $row['bagID'];

                                $query = "SELECT `username` FROM `clients` WHERE `userID` = '$userID'";
                                $userQuery = mysqli_query( $link, $query )
                                    or die( "Error: " . mysqli_error( $link ) );
                                $username = mysqli_fetch_array( $userQuery )['username'];

                                $query = "SELECT `printName` FROM `bags` WHERE `bagID` = '$bagID'";
                                $bagQuery = mysqli_query( $link, $query )
                                    or die( "Error: " . mysqli_error( $link ) );
                                $printName = mysqli_fetch_array( $bagQuery )['printName'];

                                echo '<tr>';
                                // echo '<th scope="row">' . $count . '<td>';
                                echo '<td>' . $row['address'] . '</td>';
                                echo '<td>' . $username . '</td>';
                                echo '<td>' . $printName . '</td>';
                                echo '<tr>';

                                $count++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>