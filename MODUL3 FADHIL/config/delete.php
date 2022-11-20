<?php
    require "../config/connector.php";

    $id = $_GET["id"];

    function hapus($id) {
        global $conn;
        $query = "DELETE FROM wad_modul3 WHERE id_mobil=$id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    if ( hapus($id) > 0 ) {
        echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = '../pages/ListCar-Nama.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data tidak berhasil dihapus');
                    document.location.href = '../pages/ListCar-Nama.php';
                </script>
            ";
    }

?>