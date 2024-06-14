<?= $this->extend('layouts/master') ?>

<?= $this->section('usuario') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Novo usuário</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/ativos">Usuários</a></li>
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

                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>usuarios/novo" method="post" id="registar-usuario">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Nome completo</label>
                                        <input type="text" class="form-control" name="nomeCompleto">
                                    </div>
                                    <div class="col-4">
                                        <label>Nome de usuário</label>
                                        <input type="text" class="form-control" name="nomeUsuario">
                                    </div>
                                    <div class="col-4">
                                        <label>Palavra-Passe</label>
                                        <input type="text" class="form-control" name="palavraPasse">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Tipo de acesso</label>
                                        <select class="form-control" name="tipoAcesso">
                                            <option value="user">Usuário</option>
                                            <option value="admin">Admnistrador</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('registar-usuario').submit();">Registar</a>
                                <a class="btn btn-danger" href="/usuarios">Cancelar</a>
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
