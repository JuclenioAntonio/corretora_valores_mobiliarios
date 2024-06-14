<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perfil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Perfil de usuário</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="<?php echo base_url(); ?>dist/img/juclenio.png"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $usuario['NomeCompleto'] ?></h3>
                            <p class="text-muted text-center">Corretor</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>autenticacao/perfil" id="editar-usuario">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nome Completo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nomeCompleto" value="<?php echo $usuario['NomeCompleto'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Nome de Usuário</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nomeUsuario" value="<?php echo $usuario['NomeUsuario'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Palavra-Passe</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName2" name="palavraPasse" value="<?php echo $usuario['PalavraPasse'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Tipo de acesso</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?php echo $usuario['TipoAcesso'] ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Foto de perfil</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-info" onclick="document.getElementById('editar-usuario').submit();">Actualizar</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection() ?>
