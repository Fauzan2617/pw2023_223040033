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

function cari($keyword)
{
    $query = "SELECT * FROM obat
    WHERE
   judul LIKE '%$keyword%' OR
  harga LIKE '%$keyword%' OR
  deskripsi LIKE '%$keyword%' OR
   gambar LIKE '%$keyword%'
";
    return query($query);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubahobat($data)
{
    global $conn;

    $id = $data["id"];
    $obat = htmlspecialchars($data["namaobat"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    // cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE obat SET
				judul = '$obat',
				harga = '$harga',
				deskripsi = '$deskripsi',
				gambar = '$gambar'
			  WHERE id = $id
			";
    // var_dump($query); die;
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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
    mysqli_query($conn, "INSERT INTO user VALUES( NULL,'user','$username','$alamat','$email','$nomor_telepon', NULL,'$password')");

    return mysqli_affected_rows($conn);
}

function tambahobat($data)
{
    global $conn;
    $namaobat = strtolower(stripslashes($data["namaobat"]));
    $harga = strtolower(stripslashes($data["harga"]));
    $deskripsi = strtolower(stripslashes($data["deskripsi"]));


    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO obat VALUES(NULL,'$namaobat','$harga','$deskripsi','$gambar')");

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../Main Web/img-obat/' . $namaFileBaru);

    return $namaFileBaru;
}

function login($username, $password)
{
    global $conn;

    $escapedUsername = mysqli_real_escape_string($conn, $username);
    $escapedPassword = mysqli_real_escape_string($conn, $password);

    // Query untuk memeriksa username dan password di database
    $query = "SELECT * FROM user WHERE username = '$escapedUsername' AND password = '$escapedPassword'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah ada baris hasil query
    if (mysqli_num_rows($result) > 0) {
        // Pengguna berhasil login
        $user = mysqli_fetch_assoc($result);

        // Simpan peran pengguna dalam sesi
        $_SESSION['role'] = $user['role'];
        $_SESSION['id'] = $user['id'];

        // Tutup koneksi
        mysqli_close($conn);

        return true;
    } else {
        // Pengguna gagal login
        mysqli_close($conn);
        return false;
    }
}

// Fungsi untuk memeriksa otorisasi pengguna
function checkAuthorization($requiredRole)
{
    // Periksa apakah peran pengguna dalam sesi sesuai dengan peran yang diperlukan
    if ($_SESSION['role'] !== $requiredRole) {
        // Pengguna tidak memiliki otorisasi yang cukup
        header('Location: ../Main Web'); // Ganti dengan halaman kesalahan atau alihkan ke halaman lain
        exit;
    }
}
