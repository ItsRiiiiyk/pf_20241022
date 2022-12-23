<?php 

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_20241022");

// query
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}

// tambah
function tambah($data){
    global $conn;
    // ambil data dari form
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // membuat query insert(tambah) data
    $query = "INSERT INTO mahasiwa
              VALUES ('','$nama', '$nim','$email','$jurusan','$gambar')";



mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}
// hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE  FROM mahasiwa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>