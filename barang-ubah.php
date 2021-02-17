<link rel="stylesheet" type="text/css" href="style.css ">
<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from barang where kode_barang='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<marquee><h1> Ubah Data Barang </h1></marquee>
<form action="" method="post">
<table>
    <tr>
        <td> </td>
        <td> <input type="text" name="kode_barang" placeholder="Kode barang baru"value="<?php echo $data['kode_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> </td>
        <td> <input type="text" name="nama_barang" placeholder="Nama baru"value="<?php echo $data['nama_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> </td>
        <td> <input type="text" name="stok_barang"placeholder=" stok baru"value="<?php echo $data['stok_barang']; ?>"> </td>
    </tr>
    <tr>
        <td>  </td>
        <td> <input type="text" name="harga"placeholder="Harga baru" value="<?php echo $data['harga_barang']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update barang set  
nama_barang = '$_POST[nama_barang]',
stok_barang = '$_POST[stok_barang]',
harga_barang = '$_POST[harga]'
where kode_barang = '$_GET[kode]'");


echo "<meta http-equiv=refresh content=1;URL='data-barang.php'>";

}

?>