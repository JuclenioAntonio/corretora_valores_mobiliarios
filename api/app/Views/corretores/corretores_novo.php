<?= $this->extend('layouts/master') ?>

<?= $this->section('corretor') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Novo Corretor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Corretores</a></li>
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
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>corretores/novo" method="post" id="registar-corretor">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Nome Completo</label>
                                        <input type="text" class="form-control" name="nomeCompleto">
                                    </div>
                                    <div class="col-4">
                                        <label>Nº mecanográfico</label>
                                        <input type="text" class="form-control" name="numeroMecanografico">
                                    </div>
                                    <div class="col-4">
                                        <label>Data de admissão</label>
                                        <input type="date" class="form-control" name="dataAdmissao">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Data de rescisão</label>
                                        <input type="date" class="form-control" name="dataRescisao">
                                    </div>
                                    <div class="col-4">
                                        <label>Telefone</label>
                                        <input type="number" class="form-control" name="telefone">
                                    </div>
                                    <div class="col-4">
                                        <label>Salário base</label>
                                        <input type="text" class="form-control" name="salarioBase">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Comissão mensal</label>
                                        <input type="number" class="form-control" name="comissaoMensal">
                                    </div>
                                    <div class="col-4">
                                        <label>Firma</label>
                                        <select class="form-control" name="codigoFirma">
                                            <?php foreach($firmas as $firma): ?>
                                                <option value="<?= $firma['CodigoFirma'] ?>"><?= $firma['Nome'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('registar-corretor').submit();">Registar</a>
                                <a class="btn btn-danger" href="/corretores">Cancelar</a>
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
