<?= $this->extend('layouts/master') ?>

<?= $this->section('cliente') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Listar clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
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
                            <a href="/clientes/novo" class="btn btn-primary">Novo cliente</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered text-center">
                                <thead  class="bg-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>NIF</th>
                                    <th>Telefone</th>
                                    <th>Endereço</th>
                                    <th>Detalhes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($clientes as $cliente): ?>
                                <tr>
                                    <td><?= $cliente['NomeCompleto'] ?></td>
                                    <td><?= $cliente['Nif'] ?></td>
                                    <td><?= $cliente['Telefone'] ?></td>
                                    <td><?= $cliente['Endereco'] ?></td>
                                    <td>
                                        <a href="/clientes/detalhes/<?= $cliente['CodigoCliente'] ?>"><i class="fas fa-eye"></i></a>
                                        <a href="/clientes/editar/<?= $cliente['CodigoCliente'] ?>"><i class="fas fa-edit"></i></a>
                                        <a href="/clientes/excluir/<?= $cliente['CodigoCliente'] ?>"><i class="fas fa-trash-alt"></i></a>
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
