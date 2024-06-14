<?= $this->extend('layouts/master') ?>

<?= $this->section('usuario') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar usuário</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/usuarios">Usuários</a></li>
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
                            <form method="post" action="<?php echo base_url(); ?>usuarios/editar/<?php echo $usuario['CodigoUsuario'] ?>" id="editar-usuario">
                                <div class="row">
                                    <div class="col-1">
                                        <label>Código</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $usuario['CodigoUsuario'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Nome completo</label>
                                        <input type="text" class="form-control" name="nomeCompleto" value="<?php echo $usuario['NomeCompleto'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Nome de usuário</label>
                                        <input type="text" class="form-control" name="nomeUsuario" value="<?php echo $usuario['NomeUsuario'] ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Senha</label>
                                        <input type="text" class="form-control" name="palavraPasse" value="<?php echo $usuario['PalavraPasse'] ?>">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-4">
                                        <label>Tipo de acesso</label>
                                        <select class="form-control" name="tipoAcesso">
                                            <option value="<?php echo $usuario['TipoAcesso'] ?>"><?php echo $usuario['TipoAcesso'] ?></option>
                                            <option>option 2</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="btn-group pull-right">
                                <a class="btn btn-primary" onclick="document.getElementById('editar-usuario').submit();">Editar</a>
                                <a class="btn btn-danger" href="/usuarios/detalhes/<?php echo $usuario['CodigoUsuario'] ?>">Cancelar</a>
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
