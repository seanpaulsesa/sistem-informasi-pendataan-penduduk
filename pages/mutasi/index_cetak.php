<?php
include('../_partials/top.php');
include('data-index.php');
include('../dasbor/data-index.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Mutasi</title>
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

<h1>Data Mutasi Warga</h1>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama Mutasi</th>
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
    <?php foreach ($data_mutasi as $mutasi): ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $mutasi['nik_mutasi'] ?></td>
      <td><?php echo $mutasi['nama_mutasi'] ?></td>
      <td><?php echo $mutasi['jenis_kelamin_mutasi'] ?></td>
      <td><?php echo $mutasi['usia_mutasi'] ?></td>
      <td><?php echo $mutasi['pendidikan_terakhir_mutasi'] ?></td>
      <td><?php echo $mutasi['pekerjaan_mutasi'] ?></td>
      <td><?php echo $mutasi['status_perkawinan_mutasi'] ?></td>
      <td><?php echo $mutasi['status_mutasi'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br>

<div class="summary">
  <h3>Rekapitulasi</h3>
  <dl>
    <dt>Total:</dt>
    <dd><?php echo $jumlah_mutasi['total'] ?> orang</dd>

    <dt>Laki-laki:</dt>
    <dd><?php echo $jumlah_mutasi_l['total'] ?> orang</dd>

    <dt>Perempuan:</dt>
    <dd><?php echo $jumlah_mutasi_p['total'] ?> orang</dd>

    <dt>< 17 tahun:</dt>
    <dd><?php echo $jumlah_mutasi_kd_17['total'] ?> orang</dd>

    <dt>>= 17 tahun:</dt>
    <dd><?php echo $jumlah_mutasi_ld_17['total'] ?> orang</dd>
  </dl>
</div>

</body>
</html>
