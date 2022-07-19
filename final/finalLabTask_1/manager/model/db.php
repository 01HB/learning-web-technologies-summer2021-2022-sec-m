<?php

    $host = "localhost";
    $dbname = "webtech_m";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbname;
        $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $conn;
    }
?>