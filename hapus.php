<?php
include_once("config.php");

$kode_boking = $_GET['kode_boking'];

$result = mysqli_query($mysqli, "DELETE FROM lapangan WHERE $kode_boking=kode_boking");


header("location:jadwal.php");
?>