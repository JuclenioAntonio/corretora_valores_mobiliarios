<?= $this->extend('layouts/master') ?>

<?= $this->section('firma') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nova firma</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Firmas</a></li>
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
                            <form action="<?php echo base_url(); ?>firmas/novo" method="post" id="registar-firma">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="nome">
                                    </div>
                                    <div class="col-4">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="endereco">
                                    </div>
                                    <div class="col-4">
                                        <label>Taxa de Juros diária</label>
                                        <input type="number" class="form-control" name="taxaJurosDiaria">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('registar-firma').submit();">Registar</a>
                                <a class="btn btn-danger" href="/firmas">Cancelar</a>
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
