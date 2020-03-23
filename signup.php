<?php

$server = "localhost";
$db = "bdl11_nl_bdllanding";
$user = "bdl11_nl_bdllanding";
$pass = "npYbPtyUbjPZ";

$link = mysqli_connect($server, $user, $pass, $db);

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO interests (first_name, last_name, type, email) VALUES ('" . $_POST['grid-first-name'] . "', '" . $_POST['grid-last-name'] . "', '" . $_POST['grid-type'] . "', '" . $_POST['grid-email'] . "')";
if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    header('Location: ' . $_SERVER['HTTP_REFERER'] . "?signup=true");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    mysqli_close($link);
}

?>