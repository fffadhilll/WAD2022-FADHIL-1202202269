<?php
    require('../config/connector.php');

    function tambah($data) {
        global $conn; 
        $nama_mobil = htmlspecialchars($data["nama_mobil"]);
        $nama_pemilik = htmlspecialchars($data["nama_pemilik"]);
        $merk = htmlspecialchars($data["merk"]);
        $tanggal = htmlspecialchars($data["tanggal"]);
        $deskrpisi = htmlspecialchars($data["deskrpisi"]);
        $status = htmlspecialchars($data["status"]);
        // $belum_lunas = htmlspecialchars($data["belum_lunas"]);
        $foto = upload();
        if(!$foto){
            return false;
        }

        $query = "INSERT INTO wad_modul3 VALUES ('', '$nama_mobil', '$nama_pemilik', '$merk', '$tanggal', '$deskrpisi', '$foto', '$status')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $nama_file = $_FILES['foto']['name'];
        $size = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        if($error === 4) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu');
                </script";
            return false;
        }

        $ekstensi_gambar_valid = ['jpg', 'jpeg', 'png'];
        $ekstensi_gambar = explode('.', $nama_file);
        $ekstensi_gambar = strtolower(end($ekstensi_gambar));

        if( !in_array($ekstensi_gambar, $ekstensi_gambar_valid) ) {
            echo "<script>
                    alert('Yang anda upload bukan gambar');
                </script";
            return false;
        }

        if( $size > 1000000 ) {
            echo "<script>
                    alert('Ukuran gambar terlalu besar');
                </script";
            return false;
        }

        // // $nama_file_baru = uniqid();

        move_uploaded_file("$tmp_name", "../assets/images/" . $nama_file);

        return $nama_file;
    }
?>