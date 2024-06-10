<?= $this->extend('layouts/master') ?>

<?= $this->section('carteira') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes de carteira</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item"><a href="/carteiras">Carteiras</a></li>
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
                                <a class="btn btn-primary" href="/carteiras/editar/<?= $carteira['CodigoCarteira'] ?>">Editar</a>
                            </div>
                            <a class="btn btn-dark" href="/operacoes/novo">Adicionar novo ativo</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <strong>Código</strong><br><?= $carteira['CodigoCarteira'] ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Cliente</strong><br><?= $carteira['CodigoCliente'] ?></div>
                                <div class="col-lg-3"><strong>Valor Total</strong><br><?= $carteira['ValorTotal'] ?></div>
                                <div class="col-lg-3"><strong>Rentabilidade</strong><br><?= $carteira['Rentabilidade'] ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3"><strong>Composição</strong><br><?= $carteira['Composicao'] ?></div>
                                <div class="col-lg-3"><strong>Juros em Atraso</strong><br><?= $carteira['JurosEmAtraso'] ?></div>
                                <div class="col-lg-3"><strong>Total de Ativos</strong><br><?= $carteira['TotalAtivos'] ?></div>
                            </div>

                            <!-- Navbar acordion style-->
                            <ul class="nav nav-tabs mt-5" id="carteira-detalhe" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="carteira-detalhe-ativos" data-toggle="pill" href="#carteira-conteudo-ativos" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Ativos em carteira</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="carteira-detalhe-operacoes" data-toggle="pill" href="#carteira-conteudo-operacoes" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Movimentos</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="carteira-conteudo">
                                <div class="tab-pane fade show active" id="carteira-conteudo-ativos" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <table id="example1" class="table table-bordered text-center">
                                                <thead class="bg-light">
                                                <tr>
                                                    <th>Designação</th>
                                                    <th>Quantidade</th>
                                                    <th>Tipo</th>
                                                    <th>Data de Emissão</th>
                                                    <th>Valor facial</th>
                                                    <th>Detalhes</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>PT123456789</td>
                                                    <td>Ativo 1</td>
                                                    <td>Ação</td>
                                                    <td>2023-01-01</td>
                                                    <td>100.00</td>
                                                    <td>
                                                        <a href="/ativos/detalhes/1"><i class="fas fa-eye"></i></a>
                                                        <a href="/operacoes/novo"><i class="fas fa-minus-circle"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>PT987654321</td>
                                                    <td>Ativo 2</td>
                                                    <td>Obrigação</td>
                                                    <td>2022-02-02</td>
                                                    <td>500.00</td>
                                                    <td>
                                                        <a href="/ativos/detalhes/1"><i class="fas fa-eye"></i></a>
                                                        <a href="/operacoes/novo"><i class="fas fa-minus-circle"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>ES123456789</td>
                                                    <td>Ativo 3</td>
                                                    <td>Ação</td>
                                                    <td>2021-03-03</td>
                                                    <td>25.00</td>
                                                    <td>
                                                        <a href="/ativos/detalhes/1"><i class="fas fa-eye"></i>
                                                            <a href="/operacoes/novo"><i class="fas fa-minus-circle"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>NZ987654321</td>
                                                    <td>Ativo 10</td>
                                                    <td>Obrigação</td>
                                                    <td>2014-10-10</td>
                                                    <td>150.00</td>
                                                    <td>
                                                        <a href="/ativos/detalhes/1"><i class="fas fa-eye"></i></a>
                                                        <a href="/operacoes/novo"><i class="fas fa-minus-circle"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="carteira-conteudo-operacoes" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <table id="example2" class="table table-bordered text-center">
                                                <thead  class="bg-light">
                                                <tr class="text-center">
                                                    <th>Data da operação</th>
                                                    <th>Tipo</th>
                                                    <th>Ativo</th>
                                                    <th>Quantidade</th>
                                                    <th>Valor total</th>
                                                    <th>Detalhes</th>
                                                </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                <tr>
                                                    <td>PT123456789</td>
                                                    <td>Ativo 1</td>
                                                    <td>Ação</td>
                                                    <td>2023-01-01</td>
                                                    <td>100.00</td>
                                                    <td class="text-center">
                                                        <a href="/operacoes/detalhes/1"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>PT987654321</td>
                                                    <td>Ativo 2</td>
                                                    <td>Obrigação</td>
                                                    <td>2022-02-02</td>
                                                    <td>500.00</td>
                                                    <td class="text-center">
                                                        <a href="/operacoes/detalhes/1"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>ES123456789</td>
                                                    <td>Ativo 3</td>
                                                    <td>Ação</td>
                                                    <td>2021-03-03</td>
                                                    <td>25.00</td>
                                                    <td class="text-center">
                                                        <a href="/operacoes/detalhes/1"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>NZ987654321</td>
                                                    <td>Ativo 10</td>
                                                    <td>Obrigação</td>
                                                    <td>2014-10-10</td>
                                                    <td>150.00</td>
                                                    <td class="text-center">
                                                        <a href="/operacoes/detalhes/1"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
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

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["excel","pdf"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $("#example2").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["excel","pdf"]
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

    });
</script>
<?= $this->endSection()?>
