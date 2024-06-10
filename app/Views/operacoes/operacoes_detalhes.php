<?= $this->extend('layouts/master') ?>

<?= $this->section('operacao') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes da operação</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/operacoes">Operações</a></li>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <strong>Código</strong><br><?= $operacao['CodigoOperacao'] ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Data da Operação</strong><br><?= $operacao['DataOperacao'] ?></div>
                                <div class="col-lg-3"><strong>Ativo</strong><br><?= $operacao['CodigoAtivo'] ?></div>
                                <div class="col-lg-3"><strong>Quantidade</strong><br><?= $operacao['Quantidade'] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Tipo operação</strong><br><?= $operacao['TipoOperacao'] ?></div>
                                <div class="col-lg-3"><strong>Deposito Feito</strong><br><?= $operacao['DepositoFeito'] ?></div>
                                <div class="col-lg-3"><strong>Levantamento Feito</strong><br><?= $operacao['LevantamentoFeito'] ?></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Comprovativo do Pagamento</strong><br><?= $operacao['ComprovativoPagamento'] ?></div>
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
