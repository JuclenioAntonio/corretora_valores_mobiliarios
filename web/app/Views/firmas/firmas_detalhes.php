<?= $this->extend('layouts/master') ?>

<?= $this->section('firma') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes da firma</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/firmas">Firmas</a></li>
                        <li class="breadcrumb-item active">Detalhes</li>
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
                            <div class="btn-group">
                                <a class="btn btn-primary" href="/firmas/editar/<?= $firma['CodigoFirma'] ?>">Editar</a>
                                <a class="btn btn-danger" href="/firmas/excluir/<?= $firma['CodigoFirma'] ?>">Eliminar</a>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <strong>Código</strong><br> <?= $firma['CodigoFirma'] ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Nome da Firma</strong><br><?= $firma['Nome'] ?></div>
                                <div class="col-lg-3"><strong>Taxa de juros diário</strong><br><?= $firma['TaxaJurosDiaria'] ?></div>
                                <div class="col-lg-3"><strong>Endereço</strong><br><?= $firma['Endereco'] ?></div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <h5>Corretores</h5>
                                    <table id="example1" class="table table-bordered text-center">
                                        <thead  class="bg-light">
                                        <tr>
                                            <th>Nome</th>
                                            <th>Nº mecanográfico</th>
                                            <th>Data de admissão</th>
                                            <th>Telefone</th>
                                            <th>Detalhes</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>PT123456789</td>
                                            <td>Ativo 1</td>
                                            <td>2023-01-01</td>
                                            <td>100.00</td>
                                            <td>
                                                <a href="/corretores/detalhes/1"><i class="fas fa-eye"></i></a>
                                                <a href="/corretores/editar/1"><i class="fas fa-edit"></i></a>
                                                <a href="/corretores/excluir/1"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>PT987654321</td>
                                            <td>Ativo 2</td>
                                            <td>2022-02-02</td>
                                            <td>500.00</td>
                                            <td>
                                                <a href="/corretores/detalhes/1"><i class="fas fa-eye"></i></a>
                                                <a href="/corretores/editar/1"><i class="fas fa-edit"></i></a>
                                                <a href="/corretores/excluir/1"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>ES123456789</td>
                                            <td>Ativo 3</td>
                                            <td>2021-03-03</td>
                                            <td>25.00</td>
                                            <td>
                                                <a href="/corretores/detalhes/1"><i class="fas fa-eye"></i></a>
                                                <a href="/corretores/editar/1"><i class="fas fa-edit"></i></a>
                                                <a href="/corretores/excluir/1"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>NZ987654321</td>
                                            <td>Ativo 10</td>
                                            <td>2014-10-10</td>
                                            <td>150.00</td>
                                            <td>
                                                <a href="/corretores/detalhes/1"><i class="fas fa-eye"></i></a>
                                                <a href="/corretores/editar/1"><i class="fas fa-edit"></i></a>
                                                <a href="/corretores/excluir/1"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>

                                    </table>

                                </div>
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
