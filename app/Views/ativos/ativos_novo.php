<?= $this->extend('layouts/master') ?>

<?= $this->section('ativo') ?>active<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ativos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Ativos</a></li>
                        <li class="breadcrumb-item active">Registar</li>
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
                            <h3 class="card-title">Registar novo ativo</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>ativos/novo" method="post" id="registar_ativo">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Designação</label>
                                        <input type="text" class="form-control" name="designacao">
                                    </div>
                                    <div class="col-4">
                                        <label>Tipo de ativo</label>
                                        <select class="form-control" name="tipoAtivo">
                                            <option value="Títulos de participação">Títulos de participação</option>
                                            <option value="Obrigações do tesouro">Obrigações do tesouro</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label>Data de emissão</label>
                                        <input type="date" class="form-control" name="dataEmissao" value="05/04/2024">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Valor facial</label>
                                        <input type="number" class="form-control" name="valorFacial" value="10000">
                                    </div>
                                    <div class="col-4">
                                        <label>Quantidade Inicial</label>
                                        <input type="number" class="form-control" name="quantidadeInicial" value="10">
                                    </div>
                                    <div class="col-4">
                                        <label>Nome da empresa</label>
                                        <input type="text" class="form-control" name="nomeEmpresa">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" id="registar" onclick="document.getElementById('registar_ativo').submit();">Registar</a>
                                <a class="btn btn-danger" href="/ativos">Cancelar</a>
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

<?= $this->endSection()?>
