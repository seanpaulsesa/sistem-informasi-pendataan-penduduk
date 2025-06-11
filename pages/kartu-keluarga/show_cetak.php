<?php
include('data-show.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Kartu Keluarga</title>
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

<h1>Data Kartu Keluarga</h1>

<h3>A. Data Pribadi</h3>
<table>
  <tr><th>Nomor Kartu Keluarga</th><td><?php echo $data_keluarga[0]['nomor_keluarga'] ?></td></tr>
  <tr><th>Kepala Keluarga</th><td><?php echo $data_keluarga[0]['nama_warga'] ?></td></tr>
  <tr><th>NIK Kepala Keluarga</th><td><?php echo $data_keluarga[0]['nik_warga'] ?></td></tr>
</table>

<h3>B. Data Alamat</h3>
<table>
  <tr><th>Alamat</th><td><?php echo $data_keluarga[0]['alamat_keluarga'] ?></td></tr>
  <tr><th>RT</th><td><?php echo $data_keluarga[0]['rt_keluarga'] ?></td></tr>
  <tr><th>RW</th><td><?php echo $data_keluarga[0]['rw_keluarga'] ?></td></tr>
  <tr><th>Desa/Kelurahan</th><td><?php echo $data_keluarga[0]['desa_kelurahan_keluarga'] ?></td></tr>
  <tr><th>Kecamatan</th><td><?php echo $data_keluarga[0]['kecamatan_keluarga'] ?></td></tr>
  <tr><th>Kabupaten/Kota</th><td><?php echo $data_keluarga[0]['kabupaten_kota_keluarga'] ?></td></tr>
  <tr><th>Provinsi</th><td><?php echo $data_keluarga[0]['provinsi_keluarga'] ?></td></tr>
  <tr><th>Negara</th><td><?php echo $data_keluarga[0]['negara_keluarga'] ?></td></tr>
  <tr><th>Kode Pos</th><td><?php echo $data_keluarga[0]['kode_pos_keluarga'] ?></td></tr>
</table>

<h3>C. Data Aplikasi</h3>
<table>
  <tr><th>Diinput oleh</th><td><?php echo $data_keluarga[0]['id_user'] ?></td></tr>
  <tr><th>Diinput</th><td><?php echo $data_keluarga[0]['created_at'] ?></td></tr>
  <tr><th>Diperbaharui</th><td><?php echo $data_keluarga[0]['updated_at'] ?></td></tr>
</table>

<h3>D. Data Anggota Kartu Keluarga</h3>
<table>
  <thead>
    <tr>
      <th>No</th>
      <th>NIK</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Status Kawin</th>
      <th>Status Keluarga</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($data_anggota_keluarga as $anggota) : ?>
      <tr>
        <td><?php echo $no++ ?>.</td>
        <td><?php echo $anggota['nik_warga'] ?></td>
        <td><?php echo $anggota['nama_warga'] ?></td>
        <td><?php echo $anggota['tempat_lahir_warga'] ?></td>
        <td><?php echo ($anggota['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($anggota['tanggal_lahir_warga'])) : '' ?></td>
        <td><?php echo $anggota['pendidikan_terakhir_warga'] ?></td>
        <td><?php echo $anggota['pekerjaan_warga'] ?></td>
        <td><?php echo $anggota['status_perkawinan_warga'] ?></td>
        <td><?php echo $anggota['status_perkawinan_warga'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

</body>
</html>
