<h1>Tugas 2</h1>
<p>program untuk menghitung dan menampilkan harga bet berdasarkan
    panjang nama dan warna font yang diinginkan
</p><br>

<?php
    function bet($name, $color="blue"){
        $length = strlen($name);
        if($length > 20){
            $harga = 700;
        }elseif($length >= 11){
            $harga = 500;
        }elseif($length > 1){
            $harga = 300;
        }else {
            $harga = 0;
        }
    $total = $length*$harga;
    echo'<font color="' .$color .'">nama : ' .$name .'</font><br>';
    echo'<font color="' .$color .'">nama : ' .$total .'</font><br>';
    }
?>
<form method="post">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>Warna</td>
        <td><input type="color" name="warna" value="#0000FF"></td>
    </tr>
    <table>
        <button type="submit" name="kirim">submit</button>
    </table>
</form><br>
<?php
    if(isset($_POST['kirim'])){
        bet($_POST['nama'], $_POST['warna']);
    }
?>