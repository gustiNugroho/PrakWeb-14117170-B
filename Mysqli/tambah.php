<?php
include "koneksi.php";

$nim = $_POST['nrp'];
$nama = $_POST['nama'];
$foto = $_POST['file_foto'];
$jurusan = $_POST['id_jurusan'];

$sql = "INSERT INTO mahasiswa(nrp,nama,file_foto,id_jurusan) VALUES('$nim','$nama','$foto','$jurusan')";
$query = mysqli_query($koneksi, $sql); 

if($query){
    echo "Data berhasil ditambahkan";
    
}else{
    echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}

mysqli_close($koneksi);

?>