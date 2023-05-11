<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'magang';

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}else{
    // echo "Koneksi sukses";
}
$listMahasiswa =["Anas","Budi","Cinta"];


// var_dump($listMahasiswa);


echo $listMahasiswa[0];
echo "<br>";

echo "List Mahasiswa awal <br>";
foreach($listMahasiswa as $maha){
    echo $maha."<br>";
}


array_push($listMahasiswa,"Dedi");
echo "<br>Data setelah penambahan<br>";
for($i=0;$i<count($listMahasiswa);$i++){
    echo $listMahasiswa[$i]."<br>";
}

echo "<br>";
array_unshift($listMahasiswa,"Yudi");
echo "<br>Data setelah penambahan di awal<br>";
for($i=0;$i<count($listMahasiswa);$i++){
    echo $listMahasiswa[$i]."<br>";
}


echo "<br>";
array_unshift($listMahasiswa,"Eko");
echo "<br>Data setelah penambahan di awal<br>";
for($i=0;$i<count($listMahasiswa);$i++){
    echo $listMahasiswa[$i]."<br>";
}


$listMahasiswa[] = "Fera";
$listMahasiswa[] = "Genta";

echo "<br>List Mahasiswa penambahan item dengan [] <br>";
foreach($listMahasiswa as $maha){
    echo $maha."<br>";
}

array_pop($listMahasiswa);
echo "<br>Pengunaan array pop";
foreach($listMahasiswa as $maha){
    echo $maha."<br>";
}

// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

// Query untuk menambah data
$query = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);

?>
