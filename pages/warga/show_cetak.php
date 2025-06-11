<?php
include('../_partials/top.php');
include('data-show.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Warga</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1, h3 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    th, td {
      padding: 8px;
      border: 1px solid #000;
      vertical-align: top;
    }

    th {
      width: 25%;
      background-color: #f2f2f2;
      text-align: left;
    }

    @media print {
      .no-print {
        display: none;
      }
    }
  </style>
</head>
<body onload="window.print()">

<h1>Data Warga</h1>

<h3>A. Data Pribadi</h3>
<table>
  <tr><th>NIK</th><td><?php echo $data_warga[0]['nik_warga'] ?></td></tr>
  <tr><th>Nama Warga</th><td><?php echo $data_warga[0]['nama_warga'] ?></td></tr>
  <tr><th>Tempat Lahir</th><td><?php echo $data_warga[0]['tempat_lahir_warga'] ?></td></tr>
  <tr><th>Tanggal Lahir</th><td><?php echo ($data_warga[0]['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($data_warga[0]['tanggal_lahir_warga'])) : ''?></td></tr>
  <tr><th>Jenis Kelamin</th><td><?php echo $data_warga[0]['jenis_kelamin_warga'] ?></td></tr>
</table>

<h3>B. Data Alamat</h3>
<table>
  <tr><th>Alamat KTP</th><td><?php echo $data_warga[0]['alamat_ktp_warga'] ?></td></tr>
  <tr><th>Alamat</th><td><?php echo $data_warga[0]['alamat_warga'] ?></td></tr>
  <tr><th>Desa/Kelurahan</th><td><?php echo $data_warga[0]['desa_kelurahan_warga'] ?></td></tr>
  <tr><th>Kecamatan</th><td><?php echo $data_warga[0]['kecamatan_warga'] ?></td></tr>
  <tr><th>Kabupaten/Kota</th><td><?php echo $data_warga[0]['kabupaten_kota_warga'] ?></td></tr>
  <tr><th>Provinsi</th><td><?php echo $data_warga[0]['provinsi_warga'] ?></td></tr>
  <tr><th>Negara</th><td><?php echo $data_warga[0]['negara_warga'] ?></td></tr>
  <tr><th>RT</th><td><?php echo $data_warga[0]['rt_warga'] ?></td></tr>
  <tr><th>RW</th><td><?php echo $data_warga[0]['rw_warga'] ?></td></tr>
</table>

<h3>C. Data Lain-lain</h3>
<table>
  <tr><th>Agama</th><td><?php echo $data_warga[0]['agama_warga'] ?></td></tr>
  <tr><th>Pendidikan</th><td><?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?></td></tr>
  <tr><th>Pekerjaan</th><td><?php echo $data_warga[0]['pekerjaan_warga'] ?></td></tr>
  <tr><th>Status Perkawinan</th><td><?php echo $data_warga[0]['status_perkawinan_warga'] ?></td></tr>
  <tr><th>Status Tinggal</th><td><?php echo $data_warga[0]['status_warga'] ?></td></tr>
</table>

<h3>D. Data Aplikasi</h3>
<table>
  <tr><th>Diinput oleh</th><td><?php echo $data_warga[0]['id_user'] ?></td></tr>
  <tr><th>Diinput</th><td><?php echo $data_warga[0]['created_at'] ?></td></tr>
  <tr><th>Diperbaharui</th><td><?php echo $data_warga[0]['updated_at'] ?></td></tr>
</table>

</body>
</html>
