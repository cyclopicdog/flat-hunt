<?php
require_once('../database/database-connect.php');
require_once('../database/flat.php');

var_dump($connection);

$is_modification = isset($_POST['id']);

  if($is_modification)
  {
    $data = $_POST;
  
  //  var_dump($data);
  } elseif (!$is_modification)
  {
    $data = $_POST;

      $owner_name = $_POST['owner_name'];
      $owner_rating = (int)$_POST['owner_rating'];

//      $owner = "INSERT INTO `owners` (`name`, `rating`) VALUES ('$owner_name', $owner_rating)";
//
//      $owner_result = mysqli_query($connection, $owner);
//
//      $owner_id = "SELECT `id` FROM `owners` WHERE `name` = '$owner_name'";

      $flat_name = $_POST['name'];
      $flat_street = $_POST['street'];
      $flat_area = $_POST['area'];
      $flat_rating = (int)$_POST['flat_rating'];



      $flat = "INSERT INTO `flats` (`name`, `street`, `area`, `rating`, `owner_name`, `owner_rating`) VALUES ('$flat_name', '$flat_street', '$flat_area', $flat_rating, '$owner_name', $owner_rating)";

        $flat_result = mysqli_query($connection, $flat);

//      if(!$owner_result)
//      {
//        die('Owner query failed!' . mysqli_error($connection));
//      }

       if(!$flat_result)
       {
           die('Flat query failed!' . mysqli_error($connection));
       }

  }