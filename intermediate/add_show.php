<?php
require_once 'db_connect.php';

$title = $_POST['title'];  //get infor with help of superglobal POST 
$genre = $_POST['genre'];
$year = $_POST['year'];
$country = $_POST['country'];

$sql = "INSERT INTO `TVSHOWS`(`title`, `genre`, `country`, `year`) VALUES ('$title','$genre','$year','$country')";
if (mysqli_query($connect, $sql)) {
    echo "Success";
}
