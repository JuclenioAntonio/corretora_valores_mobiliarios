<?= $this->extend('layouts/master') ?>

<?= $this->section('carteira') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lista de carteiras</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Carteiras</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered text-center">
                                <thead>
                                <tr  class="bg-light">
                                    <th>Código</th>
                                    <th>Cliente</th>
                                    <th>Total de ativos</th>
                                    <th>Valor total</th>
                                    <th>Juros em atraso</th>
                                    <th>Detalhes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($carteiras as $carteira): ?>
                                <tr>
                                    <td><?= $carteira['CodigoCarteira'] ?></td>
                                    <td><?= $carteira['CodigoCliente'] ?></td>
                                    <td><?= $carteira['TotalAtivos'] ?></td>
                                    <td><?= $carteira['ValorTotal'] ?></td>
                                    <td><?= $carteira['JurosEmAtraso'] ?></td>
                                    <td>
                                        <a href="/carteiras/detalhes/<?= $carteira['CodigoCarteira'] ?>"><i class="fas fa-eye"></i></a>
                                        <a href="/carteiras/editar/<?= $carteira['CodigoCarteira'] ?>"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["excel","pdf", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<?= $this->endSection()?>
