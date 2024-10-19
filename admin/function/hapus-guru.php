<?php 
$id = $_GET['id'];
$cek_nip = "SELECT * FROM tb_guru WHERE nip='$id'";
$hasil_nip = $koneksi->query($cek_nip);
$sql = "DELETE FROM tb_murid"

?>