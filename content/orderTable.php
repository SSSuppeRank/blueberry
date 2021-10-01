<table class="table mt-5">
    <thead>
        <tr>
          <th scope="col">bag id</th>
          <th scope="col">Print</th>
          <th scope="col">Size</th>
          <th scope="col">Price</th>
          <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <!-- <th scope="row">1</th>
    <tr>
      <th scope="row">1</th>
      <td>чета там</td>
      <td>чета там</td>
      <td>чета там</td>
      <td>чета там</td>
    </tr> -->
		<?php
            require_once( '../blueberry/script/database.php' );

            $link = mysqli_connect( $host, $user, $password, $dataBase )
            or die( "Error: " . mysqli_error( $link ) );

            $query = "SELECT * FROM `bags`";
            $result = mysqli_query( $link, $query )
                or die( "Error: " . mysqli_error( $link ) );

            $count = 0;

            while( $row = mysqli_fetch_array( $result ) ) {
                $count++;
                echo '<tr>';
                echo '<th scope="row">' . $count . '</th>';
                echo '<td><img src="' . $row['print'] . '" width=220><span class="display-5">' . $row['printName'] . '</span></td>';
                echo '<td>' . $row['size'] . '</td>';
                echo '<td>' . $row['price'] . 'тг</td>';

                echo '<form action="../blueberry/script/setBagID.php" method="POST">';
                echo '<td>';
                echo '<button type="submit" value="' . $row['bagID'] . '" name="bagID" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#order">Buy</a>';
                echo '</td>';
                echo '</form>';

                echo '</tr>';
            }
        ?>
    </tbody>
</table>