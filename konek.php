<html>
<head>
	<title>Sensor DHT11</title>
</head>
<body>

    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'db_sensor';

    $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$connect) {
        echo "Error: " . mysqli_connect_error();
        exit();
    }
    echo "Connection Success!<br>";

    $temperature = isset($_GET["temperature"]) ? $_GET["temperature"] : '';
    $humidity = isset($_GET["humidity"]) ? $_GET["humidity"] : '';

    // Mengupdate data
    $queryUpdate = "UPDATE dht11 SET temperature='$temperature', humidity='$humidity', datetime=NOW()";

    if (mysqli_query($connect, $queryUpdate)) {
        echo "Update Success!<br><br>";
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_close($connect);
    ?>
    <a href="index.php">Masuk ke Halaman Web</a>
</body>

</html>