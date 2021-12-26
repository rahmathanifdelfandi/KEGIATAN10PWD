<?php
include 'koneksi.php';
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."<br><br></b>";
}
?>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="select * from mahasiswa where nim like'%".$cari."%'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="select * from mahasiswa";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
    
?>
<tr>
<td><?php echo "NIM           : ".$r['nim']; ?><br></td>
<td><?php echo "Nama          : ".$r['nama']; ?><br></td>
<td><?php echo "Jenis Kelamin : ".$r['jkel']; ?><br></td>
<td><?php echo "Alamat        : ".$r['alamat']; ?><br></td>
<td><?php echo "Tanggal Lahir : ".$r['tgllhr']; ?><br></td><br>
<td><?php echo "Jurusan : ".$r['jurusan']; ?><br></td><br>
</tr>
<?php } ?>
