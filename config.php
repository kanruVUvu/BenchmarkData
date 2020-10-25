<?php

$host = "localhost"; /* Host name */
$user = "DheerajRaoP"; /* User */
$password = "ntoGNTe5@4"; /* Password */
$dbname = "Dheeraj_Test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
