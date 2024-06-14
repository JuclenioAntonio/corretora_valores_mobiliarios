<?= $this->extend('layouts/master') ?>

<?= $this->section('operacao') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nova operação</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/operacoes">Operações</a></li>
                        <li class="breadcrumb-item active">Regisar</li>
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
                            <form action="<?php echo base_url(); ?>operacoes/novo" method="post" id="registar-operacao">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Código do ativo</label>
                                        <select class="form-control select2" style="width: 100%;" name="codigoAtivo">
                                            <option value="1">Alabama</option>
                                            <option value="2">Alaska</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Quantidade</label>
                                        <input type="number" class="form-control" name="quantidade">
                                    </div>
                                    <div class="col-4">
                                        <label>Tipo de Operação</label>
                                        <select class="form-control" name="tipoOperacao">
                                            <option value="Compra">Compra</option>
                                            <option value="Venda">Venda</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Carteira</label>
                                        <select class="form-control" name="carteira">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <div class="col6">
                                            <label>Comprovativo de Pagamento</label>
                                            <input type="file" class="form-control" name="comprovativoPagamento">
                                        </div>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="depositoFeito">
                                                <label class="form-check-label">Deposito feito</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="levantamentoFeito">
                                                <label class="form-check-label">Levantamento feito</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">

                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('registar-operacao').submit();">Criar</a>
                                <a class="btn btn-danger" href="/operacoes">Cancelar</a>
                            </div>
                        </div>
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
        //Initialize Select2 Elements
        $('.select2').select2();

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
    }
</script>

<?= $this->endSection()?>
