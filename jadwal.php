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


    <body>
<h2 align="left"></h2>

<table  border="5" align="left" width="40%">
  <thead>
    <tr>
     <th>KODE BOKING</th><th>NAMA</th><th>NO.HP</th><th>NAMA TEAM</th><th>LAPANGAN</th><th>TGL.SEWA</th><th>JAM MASUK</th><th>JAM KELUAR</th><th>bayar</th><th>opsi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <?php
      while($user = mysqli_fetch_array($result)) {
        echo("<tr>");
        echo "<td>".$user['kode_boking']."</td>";
        echo "<td>".$user['nama']."</td>";
        echo "<td>".$user['no_hp']."</td>";
        echo "<td>".$user['nama_team']."</td>";
        echo "<td>".$user['lapangan']."</td>";
        echo "<td>".$user['tgl_sewa']."</td>";
        echo "<td>".$user['jam_masuk']."</td>";
        echo "<td>".$user['jam_keluar']."</td>";
        echo "<td>".$user['bayar']."</td>";
        echo("<td> <a href='hapus.php? kode_boking=$user[kode_boking]'>delate</a></td>  ");
        echo "</tr>";
      }
    ?>

  </tbody>
</table>
<br>
<center>
</center>

</body>






