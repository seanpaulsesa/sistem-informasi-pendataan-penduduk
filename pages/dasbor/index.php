<?php include('../_partials/top.php') ?>

<h1 class="page-header">Dasbor</h1>

<?php include('data-index.php') ?>

<div class="row">
  <div class="col-sm-12">
    <div class="alert alert-info">
      <h3>Selamat datang di Sistem Informasi Pendataan Penduduk Distrik Jayapura Utara</h3>
      <p>
        Sistem ini digunakan untuk mengelola data penduduk di Distrik Jayapura Utara, Kota Jayapura, Papua. Anda dapat mengakses berbagai informasi terkait penduduk, seperti data warga, kartu keluarga, dan mutasi penduduk.
      </p>
    </div>
  </div>
  </div>

  <div class="row">  
    <!-- Kolom 1: Pie Chart Berdasarkan Jenis Kelamin -->
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Statistik Penduduk Berdasarkan Jenis Kelamin</h3>
        </div>
        <div class="panel-body">
          <div id="pieChartBerdasarkanJenisKelamin" style="width: 100%;"></div>
        </div>
        <div class="panel-footer">
          <p>
            Statistik ini menunjukkan distribusi penduduk berdasarkan jenis kelamin.
            Laki-laki: <?= $jumlah_warga_l['total']; ?> orang,
            Perempuan: <?= $jumlah_warga_p['total']; ?> orang.
          </p>

          <a href="../warga" class="btn btn-primary" role="button">
            <span class="glyphicon glyphicon-book"></span> Detil »
          </a>
        </div>
      </div>
    </div>

    <!-- Kolom 2: Pie Chart Berdasarkan Usia -->
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Statistik Penduduk Berdasarkan Usia</h3>
        </div>
        <div class="panel-body">
          <div id="pieChartBerdasarkanUsia" style="width: 100%;"></div>
        </div>
        <div class="panel-footer">
          <p>
            Warga di atas 17 tahun: <?= $jumlah_warga_ld_17['total']; ?> orang, 
            di bawah 17 tahun: <?= $jumlah_warga_kd_17['total']; ?> orang.
          </p>

          <a href="../warga" class="btn btn-primary" role="button">
            <span class="glyphicon glyphicon-book"></span> Detil »
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">  
    <!-- Kolom 1: Pie Chart Berdasarkan Jenis Kelamin -->
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Statistik Penduduk Berdasarkan Agama</h3>
        </div>
        <div class="panel-body">


          <div id="barChartAgama" style="width: 100%;"></div>
        </div>
        
      </div>
    </div>

  </div>


  
  
<!-- 
<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Warga</h3>
        <p>
          Total ada <?php echo $jumlah_warga['total'] ?> data warga. <?php echo $jumlah_warga_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_warga_p['total'] ?> diantaranya perempuan.
        </p>
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_warga_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_warga_kd_17['total'] ?> orang.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../warga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-book"></span> Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Kartu Keluarga</h3>
        <p>Total ada <?php echo $jumlah_kartu_keluarga['total'] ?> data kartu keluarga</p>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Mutasi</h3>
        <p>
          Total ada <?php echo $jumlah_mutasi['total'] ?> data mutasi. <?php echo $jumlah_mutasi_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_mutasi_p['total'] ?> diantaranya perempuan.
        </p>
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_mutasi_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_mutasi_kd_17['total'] ?> orang.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../mutasi" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-export"></span> Detil »
        </a>
      </div>
    </div>
  </div>
</div> -->


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
  // Ambil data dari PHP
  const jumlahLaki = <?= $jumlah_warga_l['total']; ?>;
  const jumlahPerempuan = <?= $jumlah_warga_p['total']; ?>;

  // Konfigurasi chart
  const options = {
    chart: {
      type: 'pie',
      // height: 500
    },
    labels: ['Laki-laki', 'Perempuan'],
    series: [jumlahLaki, jumlahPerempuan],
    colors: ['#008FFB', '#FF4560'],
    // title: {
    //   text: 'Distribusi Warga Berdasarkan Jenis Kelamin',
    //   align: 'center'
    // },
    legend: {
      position: 'bottom'
    }
  };

  // Render chart
  const chart = new ApexCharts(document.querySelector("#pieChartBerdasarkanJenisKelamin"), options);
  chart.render();
</script>



<script>
  // Ambil data dari PHP
  const wargaDiAtas17 = <?= $jumlah_warga_ld_17['total']; ?>;
  const wargaDiBawah17 = <?= $jumlah_warga_kd_17['total']; ?>;

  // Konfigurasi pie chart
  const optionsUsia = {
    chart: {
      type: 'pie',
      // height: 500
    },
    labels: ['Di Atas 17 Tahun', 'Di Bawah 17 Tahun'],
    series: [wargaDiAtas17, wargaDiBawah17],
    colors: ['#00E396', '#FEB019'],
    // title: {
    //   text: 'Distribusi Warga Berdasarkan Usia',
    //   align: 'center'
    // },
    legend: {
      position: 'bottom'
    }
  };

  // Render chart
  const chartUsia = new ApexCharts(document.querySelector("#pieChartBerdasarkanUsia"), optionsUsia);
  chartUsia.render();
</script>


<script>
  const labelAgama = <?= json_encode(array_keys($jumlah_agama)); ?>;
  const dataAgama = <?= json_encode(array_values($jumlah_agama)); ?>;

  const options = {
    chart: {
      type: 'bar',
      height: 400
    },
    series: [{
      name: 'Jumlah Warga',
      data: dataAgama
    }],
    xaxis: {
      categories: labelAgama
    },
    colors: ['#00E396', '#0090FF', '#FEB019', '#FF4560', '#775DD0', '#3F51B5'],
    plotOptions: {
      bar: {
        distributed: true,
        horizontal: false
      }
    },
    dataLabels: {
      enabled: true
    },
    title: {
      text: 'Distribusi Penduduk Berdasarkan Agama',
      align: 'center'
    },
    legend: {
      show: false
    }
  };

  const chart = new ApexCharts(document.querySelector("#barChartAgama"), options);
  chart.render();
</script>

<?php include('../_partials/bottom.php') ?>
