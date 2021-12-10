<?php

$connection = mysqli_connect('localhost', 'root', 'w00f', 'flat-hunt');

if(!$connection)
{
  var_dump('No connection to database');
}