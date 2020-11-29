<?php
$db = new mysqli("localhost", "root", "Dks_080308", "onsen");

// Check connection
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  exit();
}
