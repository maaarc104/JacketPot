<?php

   $conn = mysqli_connect('localhost', 'root', '', 'jp_inventory');

    if ($conn->connect_error) {
              die('Connection Failed : ' . $conn->connect_error);
          }
          
?>