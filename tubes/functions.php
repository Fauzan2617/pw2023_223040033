<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rumah sakit");

function query($query)
{
    global $conn;
    // var_dump($query);die;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}




function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $user = htmlspecialchars($data["username"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $email = htmlspecialchars($data["email"]);
    $nomor = htmlspecialchars($data["nomor_telepon"]);


    $query = "UPDATE user SET
				username = '$user',
				alamat = '$alamat',
				email = '$email',
				nomor_telepon = '$nomor',
                default_png =  NULL
			  WHERE id = $id
			";
    // var_dump($query); die;
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function tampilan($user)
{
    global $conn;

    $name = htmlspecialchars($user["username"]);
    $alamat = htmlspecialchars($user["alamat"]);
    $email = htmlspecialchars($user["email"]);
    $nomor = htmlspecialchars($user["nomor_telepon"]);



    // return mysqli_affected_rows($conn);
}




function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $alamat = strtolower(stripslashes($data["alamat"]));
    $nomor_telepon = strtolower(stripslashes($data["nomor_telepon"]));
    $password = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES( NULL,'$username','$alamat','$email','$nomor_telepon', NULL,'$password')");

    return mysqli_affected_rows($conn);
}
