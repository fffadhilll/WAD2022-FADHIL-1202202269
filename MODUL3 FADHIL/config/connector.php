<?php
    $server_name = "127.0.0.1:8111";
    $username = "root";
    $password = "";
    $db = "showroom_nama_table";

    $conn = mysqli_connect($server_name, $username, $password, $db);

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        };
        return $rows;
    }
?>