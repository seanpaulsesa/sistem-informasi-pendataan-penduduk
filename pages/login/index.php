<?php
session_start();

// jika sudah login, alihkan ke halaman dasbor
if (isset($_SESSION['user'])) {
  header('Location: ../dasbor/index.php');
  exit();
}
?>

<?php include('../_partials/top-login.php') ?>

<style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .center-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-wrapper {
      display: flex;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      width: 100%;
      overflow: hidden;
    }

    .left-column {
      flex: 1;
      background-color: #e8f0fe;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 30px;
      text-align: center;
    }

    .left-column img {
      max-width: 150px;
      margin-bottom: 20px;
    }

    .right-column {
      flex: 1;
      padding: 40px;
    }

    .form-signin-heading p {
      font-size: 1rem;
    }

    .btn-primary {
      margin-top: 20px;
    }

    @media (max-width: 768px) {
      .login-wrapper {
        flex-direction: column;
      }

      .left-column, .right-column {
        width: 100%;
      }

      .left-column {
        padding: 20px;
      }
    }
  </style>

<div class="center-container">
  <div class="login-wrapper">
    <!-- Left Column: Logo and Title -->
    <div class="left-column">
      <img src="../../assets/img/logo-kota-jayapura.png" alt="Logo Kota Jayapura">
      <h3 class="">Sistem Informasi Pendataan<br>Warga Kota Jayapura Utara</h3>
    </div>

    <!-- Right Column: Login Form -->
    <div class="right-column">
      <form class="form-signin" method="post" action="../login/proses-login.php">
        <h2 class="form-signin-heading text-center">
          <strong class="mb-3 d-block">Login</strong>  
        </h2>        
        <p class="text-center">Gunakan nama pengguna dan kata sandi Anda untuk masuk ke dalam sistem</p>        
        <input type="text" name="username_user" class="form-control" placeholder="Username" autofocus required>

        <input type="password" name="password_user" class="form-control" placeholder="Password" required>

        <button class="btn btn-dark w-100" type="submit">
          <i class="fa-solid fa-sign-in"></i> Log in
        </button>
      </form>
    </div>
  </div>
</div>

<?php include('../_partials/bottom-login.php') ?>
