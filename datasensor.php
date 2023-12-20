<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_sensor';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = mysqli_query($connect, "SELECT * FROM dht11");

while ($dt = mysqli_fetch_array($query)) {
    $id = $dt['id'];
    $temperature = $dt['temperature'];
    $humidity = $dt['humidity'];
    $datetime = $dt['datetime'];

    echo "
        <tr>
            <td scope='row'><h5>$id</h5></td>
            <td scope='row'><h5>$temperature</h5></td>
            <td scope='row'><h5>$humidity</h5></td>
            <td scope='row'><h5>$datetime</h5></td>
        </tr>
    ";
}

mysqli_close($connect);
?>
