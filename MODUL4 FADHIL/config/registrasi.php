<?php
    require "../config/connector.php";

    function registrasi($data) {
        global $conn;
        
        $email = $data["email"];
        $nama = $data["nama"];
        $hp = $data["hp"];
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $konfirmasiPassword = mysqli_real_escape_string($conn, $data["konfirmasiPassword"]);

        $query1 = "SELECT email from user_fadhil WHERE email='$email'";
        $result = mysqli_query($conn, $query1);

        if ( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('Email sudah terdaftar');
                  </script>";
            
            return false;
        }

        if ( $password !== $konfirmasiPassword ) {
            echo "<script>
                    alert('Password tidak sesuai');
                  </script>";
            return false;
        }

        // enkripsi password
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user_fadhil VALUES ('', '$nama', '$email', '$password', '$hp')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>  