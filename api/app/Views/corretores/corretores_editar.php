<?= $this->extend('layouts/master') ?>

<?= $this->section('corretor') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar corretor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/corretores">Corretores</a></li>
                        <li class="breadcrumb-item active">Editar</li>
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
                            <form method="post" action="<?php echo base_url(); ?>corretores/editar/<?php echo $corretor['CodigoCorretor'] ?>" id="editar-corretor">
                                <div class="row">
                                    <div class="col-2">
                                        <label>Código</label>
                                        <input type="text" class="form-control" disabled value="<?= $corretor['CodigoCorretor'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Nome Completo</label>
                                        <input type="text" class="form-control" name="nomeCompleto" value="<?= $corretor['NomeCompleto'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Nº mecanográfico</label>
                                        <input type="text" class="form-control" name="numeroMecanografico" value="<?= $corretor['NumeroMecanografico'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Data de admissão</label>
                                        <input type="date" class="form-control" name="dataAdmissao" value="<?= $corretor['DataAdmissao'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Data de rescisão</label>
                                        <input type="date" class="form-control" name="dataRescisao" value="<?= $corretor['DataRescisao'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Telefone</label>
                                        <input type="number" class="form-control" name="telefone" value="<?= $corretor['Telefone'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Salário base</label>
                                        <input type="text" class="form-control" name="salarioBase" value="<?= $corretor['SalarioBase'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Comissão mensal</label>
                                        <input type="number" class="form-control" name="comissaoMensal" value="<?= $corretor['ComissaoMensal'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Firma</label>
                                        <select class="form-control" name="firma">
                                            <option value=""><?= $corretor['Firma'] ?></option>
                                            <option >Firma 1</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('editar-corretor').submit();">Editar</a>
                                <a class="btn btn-danger" href="/corretores/detalhes/<?= $corretor['CodigoCorretor'] ?>">Cancelar</a>
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
