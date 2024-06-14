<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InvestFácil</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/sobre-nos" class="nav-link">Sobre nós</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/contatos" class="nav-link">Contactos</a>
      </li>
    </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">Opções</span>
                  <div class="dropdown-divider"></div>
                  <a href="/autenticacao/login" class="dropdown-item">
                      <i class="fas fa-door-open mr-2"></i> Terminar sessão
                  </a>

              </div>
          </li>

      </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="<?php echo base_url(); ?>dist/img/investfacil_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">InvestFácil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>dist/img/juclenio.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/autenticacao/perfil" class="d-block">Juclénio António</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->

            <!-- Dashboard  -->
            <li class="nav-item">
                <a href="/" class="nav-link <?= $this->renderSection('dashboard') ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/ativos" class="nav-link <?= $this->renderSection('ativo') ?>">
                    <i class="nav-icon fas fa-piggy-bank"></i>
                    <p>
                        Ativos
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/carteiras" class="nav-link <?= $this->renderSection('carteira') ?>">
                    <i class="nav-icon fas fa-wallet"></i>
                    <p>
                        Carteiras
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/clientes" class="nav-link <?= $this->renderSection('cliente') ?>">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>
                        Clientes
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/corretores" class="nav-link <?= $this->renderSection('corretor') ?>">
                    <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                        Corretores
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/firmas" class="nav-link <?= $this->renderSection('firma') ?>">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                        Firmas
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/operacoes" class="nav-link <?= $this->renderSection('operacao') ?>">
                    <i class="nav-icon fas fa-exchange-alt"></i>
                    <p>
                        Operações
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/usuarios" class="nav-link <?= $this->renderSection('usuario') ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Usuários
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


    <?= $this->renderSection('content') ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url(); ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>dist/js/pages/dashboard2.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url(); ?>plugins/select2/js/select2.full.min.js"></script>

<?= $this->renderSection('scripts') ?>
</body>
</html>
