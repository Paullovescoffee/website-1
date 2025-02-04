<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp = $_POST['temp'];
    $hum = $_POST['hum'];

    // Save to a file
    file_put_contents("/var/www/html/sensor_data.json", json_encode(["temp" => $temp, "hum" => $hum]));

    echo "Data received: Temp = $temp °C, Humidity = $hum %";
}
?>
