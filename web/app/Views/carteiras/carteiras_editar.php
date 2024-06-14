<?= $this->extend('layouts/master') ?>

<?= $this->section('carteira') ?>active<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar carteira</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Carteiras</a></li>
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
                            <form method="post" action="<?php echo base_url(); ?>carteiras/editar/<?php echo $carteira['CodigoCarteira'] ?>" id="editar-carteira">
                                <div class="row">
                                    <div class="col-1">
                                        <label>Código</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $carteira['CodigoCarteira'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Cliente</label>
                                        <input type="text" class="form-control" placeholder="" disabled value="<?php echo $carteira['CodigoCliente'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Valor Total</label>
                                        <input type="text" class="form-control" name="valorTotal" value="<?php echo $carteira['ValorTotal'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Rentabilidade</label>
                                        <input type="text" class="form-control" name="rentabilidade" value="<?php echo $carteira['Rentabilidade'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Composição</label>
                                        <input type="text" class="form-control" name="composicao" value="<?php echo $carteira['Composicao'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Total de ativos</label>
                                        <input type="number" class="form-control" disabled value="<?php echo $carteira['TotalAtivos'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Juros em atraso</label>
                                        <input type="text" class="form-control" name="jurosEmAtraso" value="<?php echo $carteira['JurosEmAtraso'] ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('editar-carteira').submit();">Editar</a>
                                <a class="btn btn-danger" href="/carteiras/detalhes/<?php echo $carteira['CodigoCarteira'] ?>">Cancelar</a>
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
