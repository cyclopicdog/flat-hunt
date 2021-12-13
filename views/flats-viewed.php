<?php
require_once('./database/database-connect.php');

$get_flats = "SELECT * FROM `flats` WHERE `id` = '2'";

$flats = mysqli_query($connection, $get_flats);

while($info = mysqli_fetch_assoc($flats)) {
    foreach ($info as $key => $value)
    {
        echo "<p>" . $key . ": " . $value . "</p>";
    }

}