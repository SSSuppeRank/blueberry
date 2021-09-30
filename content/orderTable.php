<table class="table mt-5">
    <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Print</th>
          <th scope="col">Size</th>
          <th scope="col">Price</th>
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
                echo '<td>' . $row['print'] . '</td>';
                echo '<td>' . $row['size'] . '</td>';
                echo '<td>' . $row['price'] . 'тг</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>