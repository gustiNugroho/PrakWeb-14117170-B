<HTML>
    <HEAD>
        <title>Pencarian Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Pencarian Data Mahasiswa</h1>
        <?php
        $cari=$_POST['nama'];
        $conn=mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"testmhs");
        $hasil=mysqli_query($conn,"select *from mahasiswa where nama like '%$cari%'");
        $jumlah=mysqli_num_rows($hasil);
        echo "<br>";
        echo "Ditemukan : $jumlah";
        echo "<br>";
        while ($baris=mysqli_fetch_array($hasil)) {
            echo "ID Nama : ";
            echo $baris[0];
            echo "<br>";
            echo "NAMA : ";
            echo $baris[1];
            echo "<br>";
            echo "ALAMAT : ";
            echo $baris[2];
            echo "<br>";
            echo "JURUSAN : ";
            echo $baris[3];
            echo "<br> <br>";
        }
         ?>
    </BODY>
</HTML>
