<?php
include('../_partials/top.php');
include('data-index.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak Data Kartu Keluarga</title>
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

<h1>Data Kartu Keluarga</h1>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Nomor KK</th>
      <th>Kepala Keluarga</th>
      <th>NIK Kepala</th>
      <th>Jml. Anggota</th>
      <th>Alamat</th>
      <th>RT</th>
      <th>RW</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_kartu_keluarga as $kartu_keluarga): ?>

      <?php
      // hitung anggota
      $query_jumlah_anggota = "SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_keluarga = ".$kartu_keluarga['id_keluarga'];
      $hasil_jumlah_anggota = mysqli_query($db, $query_jumlah_anggota);
      $jumlah_jumlah_anggota = mysqli_fetch_assoc($hasil_jumlah_anggota);
      ?>

      <tr>
        <td><?php echo $nomor++ ?>.</td>
        <td><?php echo $kartu_keluarga['nomor_keluarga'] ?></td>
        <td><?php echo $kartu_keluarga['nama_warga'] ?></td>
        <td><?php echo $kartu_keluarga['nik_warga'] ?></td>
        <td><?php echo $jumlah_jumlah_anggota['total'] ?></td>
        <td><?php echo $kartu_keluarga['alamat_keluarga'] ?></td>
        <td><?php echo $kartu_keluarga['rt_keluarga'] ?></td>
        <td><?php echo $kartu_keluarga['rw_keluarga'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br>

<div class="summary">
  <h3>Rekapitulasi</h3>
  <dl>
    <dt>Total KK:</dt>
    <dd><?php echo $jumlah_kartu_keluarga['total'] ?> keluarga</dd>
  </dl>
</div>

</body>
</html>
