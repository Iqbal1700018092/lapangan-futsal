<!DOCTYPE html>

<?php
include_once ("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM lapangan ORDER BY kode_boking DESC");
?>

<html>
<head>
  <title>FUTSAL BARDOSONO</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <!-- bagian header template -->
  <header>
    <h1 class="judul">BARDOSONO HAPPY FUTSAL</h1>
    <p class="deskripsi">JL.DR.SOEPOMO NO 60 YOGYAKARTA </p>
  </header>
  <!-- akhir bagian header template -->
  
  <div class="wrap">
    <!-- bagian menu     -->
    <nav class="menu">
      <ul>
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="tentang.html">About</a>
        </li>
        <li>
          <a href="sewa.php">Sewa</a>
        </li>
        <li>
          <a href="jadwal.php">jadwal</a>
        </li
         <li>
          <a href="logout.php">Log Out</a>
        </li>
      </ul>
    </nav>

     <!-- bagian sidebar website -->
    <aside class="sidebar">
      <div class="widget">
        <h2>Tutorial</h2>
        <p>Selamat datang di www.malasngoding.com, situs ini menyediakan tutorial pemrograman web, mobile & desktop.</p>
      </div>
      <div class="widget">
        <h2>Ebook Gratis</h2>
        <p>Teman-teman bisa mendapatkan ebook tutorial gratis di sini <a target="_blank" href="https://www.malasngoding.com">www.malasngoding.com</a>.</p>
      </div>
    </aside>
    <!-- akhir bagian sidebar website -->
 





<h1></h1>
<br/>
<div id="bodyatas">
        <form action="sewa.php" method="post" action="simpan.php">
            <table align="left">
                <tr><td>KODE BOKING</td><td>
                    <input type="text" onkeyup="isi_otomatis()" name="kode_boking"></td></tr>

                <tr><td>NAMA</td>
                    <td><input type="text" name="nama"></td></tr>

                <tr><td>NO.HP</td>
                    <td><input type="text" name="no_hp"></td></tr>

                <tr><td>NAMA TEAM</td>
                    <td><input type="text" name="nama_team"></td></tr>

                <tr><td>LAPANGAN</td>
                    <td><input type="radio" name="lapangan" value="001">001
                        <input type="radio" name="lapangan" value="002">002
                    </td></tr>

                <tr><td>TGL.SEWA</td>

                    <td><input type="date" name="tgl_sewa"></td></tr>

                <tr><td>JAM MASUK</td>
                    <td><input type="text" name="jam_masuk"></td></tr>
                
                <tr><td>JAM KELUAR</td>
                    <td><input type="text" name="jam_keluar"></td></tr>
                  
                  <tr><td>BAYAR</td><td>
                        <select name="bayar">
                            <option value="50.000">1 jam</option>
                            <option value="100.000">2 jam</option>
                            <option value="150.000">3 jam</option>
                            <option value="200.000">4 jam</option>
                            <option value="250.000">5 jam</option>
                        </select>

                <center>
                <tr><a href="sewa.php"></a><td colspan="2"><button type="submit" name="simpan" value="simpan">SIMPAN</button></td></tr>
                </center>
                <center><a href="index.php">lihat jadwal</a></center>
            </table>
      </form>

<?php

if (isset($_POST['simpan'])) {
    $kode_boking = $_POST['kode_boking'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $nama_team = $_POST['nama_team'];
    $lapangan = $_POST['lapangan'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_keluar = $_POST['jam_keluar'];
    $bayar = $_POST['bayar'];

include_once("config.php");

$result = mysqli_query($mysqli, "INSERT INTO lapangan(kode_boking,nama,no_hp,nama_team,lapangan,tgl_sewa,jam_masuk,jam_keluar,bayar) VALUES ('$kode_boking','$nama','$no_hp','$nama_team','$lapangan','$tgl_sewa','$jam_masuk','$jam_keluar','$bayar')");

echo ". <a href='index.php'></a>";
}
echo "<br>";
echo "<center>";
echo "<a href= sewa.php><button></button></a>";
echo "</center>";
?>