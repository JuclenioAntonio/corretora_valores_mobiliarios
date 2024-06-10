<?= $this->extend('layouts/master') ?>

<?= $this->section('ativo') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lista de ativos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Ativos</li>
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
                            <a href="/ativos/novo" class="btn btn-primary">Novo ativo</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered text-center">
                                <thead class="bg-light">
                                <tr>
                                    <th>Código</th>
                                    <th>Designação</th>
                                    <th>Tipo</th>
                                    <th>Data de Emissão</th>
                                    <th>Valor facial</th>
                                    <th>Detalhes</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($ativos)) {
                                        foreach ($ativos as $ativo) : ?>
                                            <tr>
                                                <td><?= $ativo['CodigoAtivo'] ?></td>
                                                <td><?= $ativo['Designacao'] ?></td>
                                                <td><?= $ativo['TipoAtivo'] ?></td>
                                                <td><?= $ativo['DataEmissao'] ?></td>
                                                <td><?= $ativo['ValorFacial'] ?></td>
                                                <td>
                                                    <a href="/ativos/detalhes/<?= $ativo['CodigoAtivo'] ?>"><i class="fas fa-eye"></i></a>
                                                    <a href="/ativos/editar/<?= $ativo['CodigoAtivo'] ?>"><i class="fas fa-edit"></i></a>
                                                    <a href="/ativos/excluir/<?= $ativo['CodigoAtivo'] ?>"><i class="fas fa-trash-alt"></i></a>
                                               </td>
                                            </tr>
                                        <?php endforeach;
                                    } ?>
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
            "buttons": ["excel", "pdf", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<?= $this->endSection()?>
