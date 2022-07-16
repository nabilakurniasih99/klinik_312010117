<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "klinik_312010117";

//Buat koneksi variabel untuk menghubungkan database dengan PHP
$koneksi = mysqli_connect( $host , $user , $pass , $db ); //isi dgn 4 variabel 

//cek koneksi 
if ( $koneksi == false ) //Jika koneksi gagal
{
echo "Koneksi ke server gagal."; 
die();
}
?> 

<!-- Dasbor -->
<div class ="bg-light rounded-3 m-3"> 
<div class ="container-fluid"> 
<h1> Sistem Klinik_312010117 </h1> 
</div> 

<div class ="pasien" style = "background-color: #00FF00; width: 120px; padding:10px; float:left; margin:10px; border-radius:10px;"> 
<p> Data Pasien </p> 
<?php 
$queryJml = "SELECT * FROM pasien"; 
$jml = mysqli_num_rows(mysqli_query( $koneksi , $queryJml )); 
?> 
<div class ="jml" style ="font-size: 60px;"> 
<?php 
echo "<b> $jml </b>"; 
?> 
</div > 

</div > 
<div class ="dokter" style ="background-color: #00FFFF; width: 120px; padding:10px; float:left; margin:10px; border-radius:10px;"> 
<p> Data Dokter </p> 
<?php 
$queryJml = "SELECT * FROM dokter"; 
$jml = mysqli_num_rows(mysqli_query( $koneksi , $queryJml )); 
?> 
<div class ="jml" style ="font-size: 60px;"> 
<?php 
echo "<b> $jml </b>"; 
?> 
</div > 

</div > 
<div class ="obat" style ="background-color: #008080; width: 120px; padding:10px; float:left; margin:10px; border-radius:10px;"> 
<p> Data Obat </p> 
<?php 
$queryJml = "SELECT * FROM obat"; 
$jml = mysqli_num_rows(mysqli_query( $koneksi , $queryJml )); 
?> 
<div class ="jml" style = "font-size: 60px;"> 
<?php 
echo "<b> $jml </b>"; 
?> 
</div > 

</div > 
<div class ="berobat" style ="background-color: #FF00FF; width: 120px; padding:10px; float:left; margin:10px; border-radius:10px;"> 
<p> Data Berobat </p> 
<?php 
$queryJml = "SELECT * FROM berobat"; 
$jml = mysqli_num_rows(mysqli_query( $koneksi , $queryJml ));
?>
<div class ="jml" style="font-size: 60px;">
<?php
echo "<b> $jml </b>";
?>
</div>

</div>
</div>
<div style="width: 100vh">
	
</div>
<br><br><br><br><br><br><br><br><br>