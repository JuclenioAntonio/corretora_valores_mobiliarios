<?= $this->extend('layouts/master') ?>

<?= $this->section('usuario') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Excluir usuário</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Usuários</a></li>
                            <li class="breadcrumb-item active">Excluir</li>
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
                        <div class="card-body ">
                            <p>Tem certeza que pretende eliminar o registo?</p>
                            <form method="post" action="<?php echo base_url();?>usuarios/excluir/<?php echo $CodigoUsuario ?>" id="excluir-usuario"></form>
                            <div class="btn-group pull-right">
                                <a class="btn btn-danger" onclick="document.getElementById('excluir-usuario').submit();">Eliminar</a>
                                <a class="btn btn-primary" href="/usuarios/detalhes/<?php echo $CodigoUsuario ?>">Cancelar</a>

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
