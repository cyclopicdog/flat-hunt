<?php
require_once('../database/database-connect.php');
require_once('../database/flat.php');

var_dump($connection);

$is_modification = isset($_POST['id']);

  if($is_modification)
  {
    $data = $_POST;
  
    var_dump($data);
  } elseif (!$is_modification)
  {
    $data = $_POST;
var_dump($data);
    foreach($data as $key => $value)
    {
      $query = "INSERT INTO `flats` ($key) VALUES ($value)";

      $result = mysqli_query($connection, $query);

      if(!$result)
      {
        die('Query failed!' . mysqli_error($connection));
      }
    }
  }