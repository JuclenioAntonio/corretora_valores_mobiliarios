<?= $this->extend('layouts/master') ?>

<?= $this->section('cliente') ?>active<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes do cliente</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Clientes</a></li>
                        <li class="breadcrumb-item active">Detalhes</li>
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
                            <div class="btn-group">
                                <a class="btn btn-primary" href="/clientes/editar/<?= $cliente['CodigoCliente'] ?>">Editar</a>
                                <a class="btn btn-danger" href="/clientes/excluir/<?= $cliente['CodigoCliente'] ?>">Eliminar</a>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <strong>Código</strong><br> <?= $cliente['CodigoCliente'] ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Nome completo</strong><br><?= $cliente['NomeCompleto'] ?></div>
                                <div class="col-lg-3"><strong>Nif</strong><br><?= $cliente['Nif'] ?></div>
                                <div class="col-lg-3"><strong>Endereço</strong><br><?= $cliente['Endereco'] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Telefone</strong><br><?= $cliente['Telefone'] ?></div>
                            </div>

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

<?= $this->endSection()?>
