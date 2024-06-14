<?= $this->extend('layouts/master') ?>

<?= $this->section('firma') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar firma</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/firmas">Firmas</a></li>
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
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url(); ?>firmas/editar/<?php echo $firma['CodigoFirma'] ?>" id="editar-firma">
                                <div class="row">
                                    <div class="col-2">
                                        <label>Código</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $firma['CodigoFirma'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="nome" value="<?php echo $firma['Nome'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="<?php echo $firma['Endereco'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Taxa de Juros diária</label>
                                        <input type="number" class="form-control" name="taxaJurosDiaria" value="<?php echo $firma['TaxaJurosDiaria'] ?>">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('editar-firma').submit();">Editar</a>
                                <a class="btn btn-danger" href="/firmas/detalhes/<?php echo $firma['CodigoFirma'] ?>">Cancelar</a>
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
