<?= $this->extend('layouts/master') ?>

<?= $this->section('operacao') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lista de operações</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Operações</li>
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
                        <div class="card-header">
                            <a href="/operacoes/novo" class="btn btn-primary">Nova operação</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered text-center">
                                <thead  class="bg-light">
                                <tr class="text-center">
                                    <th>Código</th>
                                    <th>Data da operação</th>
                                    <th>Quantidade</th>
                                    <th>Tipo</th>
                                    <th>Valor total</th>
                                    <th>Detalhes</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php foreach($operacoes as $operacao): ?>
                                <tr>
                                    <td><?= $operacao['CodigoOperacao'] ?></td>
                                    <td><?= $operacao['DataOperacao'] ?></td>
                                    <td><?= $operacao['Quantidade'] ?></td>
                                    <td><?= $operacao['TipoOperacao'] ?></td>
                                    <td><?= $operacao['ValorTotal'] ?></td>
                                    <td class="text-center">
                                        <a href="/operacoes/detalhes/<?= $operacao['CodigoOperacao'] ?>"><i class="fas fa-eye"></i></a>
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
