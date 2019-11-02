<?php
  include 'connect.php';
  $conn = OpenCon();
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  echo "Connected Successfully";
  CloseCon($conn);
  ?>