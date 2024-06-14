<?= $this->extend('layouts/master') ?>

<?= $this->section('ativo') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes do ativo</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Ativos</a></li>
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
                                <a class="btn btn-primary" href="/ativos/editar/<?= $ativo['CodigoAtivo'] ?>">Editar</a>
                                <a class="btn btn-danger" href="/ativos/excluir/<?= $ativo['CodigoAtivo'] ?>">Eliminar</a>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <strong>Código</strong><br><?= $ativo['CodigoAtivo'] ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Designação</strong><br><?= $ativo['Designacao'] ?></div>
                                <div class="col-lg-3"><strong>Tipo de ativo</strong><br><?= $ativo['TipoAtivo'] ?></div>
                                <div class="col-lg-3"><strong>Data de emissão</strong><br><?= $ativo['DataEmissao'] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Valor facial</strong><br><?= $ativo['ValorFacial'] ?></div>
                                <div class="col-lg-3"><strong>Quantidade Inicial</strong><br><?= $ativo['QuantidadeInicial'] ?></div>
                                <div class="col-lg-3"><strong>Quantidade Disponível</strong><br><?= $ativo['QuantidadeDisponivel'] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Nome da empresa</strong><br><?= $ativo['NomeEmpresa'] ?></div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-3">
                                    <a class="btn btn-dark" href="/operacoes/novo">Nova operação</a>
                                </div>
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
