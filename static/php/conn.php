<?php 
    $host_name = "127.0.0.1";
    $database = "db_name";
    $user_name = "root";
    $password = "";

    function get_db_connection() {
        global $host_name, $database, $user_name, $password;
        return mysqli_connect($host_name, $user_name, $password, $database) ;
    };
?>