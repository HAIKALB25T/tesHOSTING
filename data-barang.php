<link rel="stylesheet" type="text/css" href="style.css">
<marquee><h3> Data barang </h3></marquee>
<a align ="center"href="barang-tambah.php">Tambah Barang</a>
<table border="1">
    <tr>
        <th width=" 50">No</th>
        <th width=" 120">Kode Barang </th>
        <th width=" 350">Nama Barang </th>
        <th width=" 150">Stok Barang</th>
        <th width=" 150">Harga</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while($tampil = mysqli_fetch_array($ambildata)){
          $warna =($no%2==1)?"#eee":"white";
        echo "
        <tr bgcolor='$warna'>
            <td>$no</td>
            <td>$tampil[kode_barang]</td>
            <td>$tampil[nama_barang]</td>
            <td>$tampil[stok_barang]</td>
            <td>$tampil[harga_barang]</td>
            <td><a href='?kode=$tampil[kode_barang]'> <input type='button' class='btn-delete'> </a></td>
            <td><a href='barang-ubah.php?kode=$tampil[kode_barang]'> <input type='button' class='btn-update'>  </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from barang where kode_barang='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='data-barang.php'>";

    }
    ?>