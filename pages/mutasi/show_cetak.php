<?php include('data-show.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Mutasi</title>
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

<h1>Data Mutasi</h1>

<h3>A. Data Pribadi</h3>
<table>
  <tr><th>NIK</th><td><?php echo $data_mutasi[0]['nik_mutasi'] ?></td></tr>
  <tr><th>Nama Mutasi</th><td><?php echo $data_mutasi[0]['nama_mutasi'] ?></td></tr>
  <tr><th>Tempat Lahir</th><td><?php echo $data_mutasi[0]['tempat_lahir_mutasi'] ?></td></tr>
  <tr><th>Tanggal Lahir</th><td><?php echo $data_mutasi[0]['tanggal_lahir_mutasi'] ?></td></tr>
  <tr><th>Jenis Kelamin</th><td><?php echo $data_mutasi[0]['jenis_kelamin_mutasi'] ?></td></tr>
</table>

<h3>B. Data Alamat</h3>
<table>
  <tr><th>Alamat KTP</th><td><?php echo $data_mutasi[0]['alamat_ktp_mutasi'] ?></td></tr>
  <tr><th>Alamat Domisili</th><td><?php echo $data_mutasi[0]['alamat_mutasi'] ?></td></tr>
  <tr><th>Desa/Kelurahan</th><td><?php echo $data_mutasi[0]['desa_kelurahan_mutasi'] ?></td></tr>
  <tr><th>Kecamatan</th><td><?php echo $data_mutasi[0]['kecamatan_mutasi'] ?></td></tr>
  <tr><th>Kabupaten/Kota</th><td><?php echo $data_mutasi[0]['kabupaten_kota_mutasi'] ?></td></tr>
  <tr><th>Provinsi</th><td><?php echo $data_mutasi[0]['provinsi_mutasi'] ?></td></tr>
  <tr><th>Negara</th><td><?php echo $data_mutasi[0]['negara_mutasi'] ?></td></tr>
  <tr><th>RT</th><td><?php echo $data_mutasi[0]['rt_mutasi'] ?></td></tr>
  <tr><th>RW</th><td><?php echo $data_mutasi[0]['rw_mutasi'] ?></td></tr>
</table>

<h3>C. Data Lain-lain</h3>
<table>
  <tr><th>Agama</th><td><?php echo $data_mutasi[0]['agama_mutasi'] ?></td></tr>
  <tr><th>Pendidikan</th><td><?php echo $data_mutasi[0]['pendidikan_terakhir_mutasi'] ?></td></tr>
  <tr><th>Pekerjaan</th><td><?php echo $data_mutasi[0]['pekerjaan_mutasi'] ?></td></tr>
  <tr><th>Status Perkawinan</th><td><?php echo $data_mutasi[0]['status_perkawinan_mutasi'] ?></td></tr>
  <tr><th>Status Tinggal</th><td><?php echo $data_mutasi[0]['status_mutasi'] ?></td></tr>
</table>

<h3>D. Data Aplikasi</h3>
<table>
  <tr><th>Diinput oleh</th><td><?php echo $data_mutasi[0]['id_user'] ?></td></tr>
  <tr><th>Diinput</th><td><?php echo $data_mutasi[0]['created_at'] ?></td></tr>
  <tr><th>Diperbaharui</th><td><?php echo $data_mutasi[0]['updated_at'] ?></td></tr>
</table>

</body>
</html>
