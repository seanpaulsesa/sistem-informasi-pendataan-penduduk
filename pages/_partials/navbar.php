<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="text-primary text-uppercase" href="../dasbor" style="display: flex; align-items: center;  text-decoration: none;margin-top: 10px;">
        <img src="../../assets/img/logo-kota-jayapura.png" alt="Logo" style="height: 30px; margin-right: 10px;">
        Aplikasi Pendataan Warga

      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text">Hai, <?php echo $_SESSION['user']['nama_user'] ?></p>
        <li><a href="../dasbor"><i class="glyphicon glyphicon-home"></i> Dasbor</a></li>
        <li><a href="../login/logout.php"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></li>
      </ul>
    </div>
  </div>
</nav>
