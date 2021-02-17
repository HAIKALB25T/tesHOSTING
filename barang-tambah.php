
<marquee><h1> Tambah Barang </h1></marquee>
<link rel="stylesheet" type="text/css" href="style.css">
<form action="" method="post">
    <a align ="center"href="data-barang.php">Data Barang</a>
<table>
     <tr>
        <td> </td>
        <td> <input type="text" name="kode_barang" placeholder="Masukan kode barang"> </td>
    </tr>
    <tr>
        <td ></td>
        <td> <input type="text" name="nama_barang" placeholder="Masukan nama barang"> </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="text" name="stok_barang" placeholder="Masukan stok barang"> </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="text" name="harga_barang" placeholder="Masukan harga barang"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>
</form>


<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into barang set  
kode_barang = '$_POST[kode_barang]',
nama_barang = '$_POST[nama_barang]',
stok_barang = '$_POST[stok_barang]',
harga_barang = '$_POST[harga_barang]'");
echo "<meta http-equiv=refresh content=1;URL='data-barang.php'>";


}

?>
