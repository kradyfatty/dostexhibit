<!DOCTYPE HTML>
<html lang="en">
<?php
    $servername = "localhost";
    $username = "nstw2020";
    $password = "N57w2020!@#$%";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=dostnstw_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    } catch(PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
    }

?>     
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>DOST IX - NSTW2020</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->

        <link type="text/css" rel="stylesheet" href="../assets/css/reset.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/color.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/home.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="../images/icon.ico">
    </head>