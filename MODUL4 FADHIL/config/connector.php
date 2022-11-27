<?php
$server_name = "127.0.0.1:3306";
$username = "root";
$password = "";
$db = "wad_modul4_fadhil";

$conn = mysqli_connect($server_name, $username, $password, $db);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
}
