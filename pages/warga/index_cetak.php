<?php
include('../_partials/top.php');
include('data-index.php');
include('../dasbor/data-index.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Warga</title>
  <style>
    @media print {
      .no-print {
        display: none;
      }
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid black;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    h1, .summary {
      text-align: center;
    }

    .summary dl {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .summary dt, .summary dd {
      margin: 0 10px;
    }
  </style>
</head>
<body onload="window.print()">

<h1>Data Warga</h1>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama</th>
      <th>L/P</th>
      <th>Usia</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_warga as $warga): ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $warga['nik_warga'] ?></td>
      <td><?php echo $warga['nama_warga'] ?></td>
      <td><?php echo $warga['jenis_kelamin_warga'] ?></td>
      <td><?php echo $warga['usia_warga'] ?></td>
      <td><?php echo $warga['pendidikan_terakhir_warga'] ?></td>
      <td><?php echo $warga['pekerjaan_warga'] ?></td>
      <td><?php echo $warga['status_perkawinan_warga'] ?></td>
      <td><?php echo $warga['status_warga'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br>

<div class="summary">
  <h3>Rekapitulasi</h3>
  <dl>
    <dt>Total Warga:</dt>
    <dd><?php echo $jumlah_warga['total'] ?> orang</dd>

    <dt>Laki-laki:</dt>
    <dd><?php echo $jumlah_warga_l['total'] ?> orang</dd>

    <dt>Perempuan:</dt>
    <dd><?php echo $jumlah_warga_p['total'] ?> orang</dd>

    <dt>< 17 tahun:</dt>
    <dd><?php echo $jumlah_warga_kd_17['total'] ?> orang</dd>

    <dt>>= 17 tahun:</dt>
    <dd><?php echo $jumlah_warga_ld_17['total'] ?> orang</dd>
  </dl>
</div>

</body>
</html>
