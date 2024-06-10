<?= $this->extend('layouts/master') ?>

<?= $this->section('dashboard') ?>active<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Estatísticas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Estatísticas</li>
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
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-piggy-bank"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"> Total de Ativos</span>
                            <span class="info-box-number">
                            <?= $TotalAtivos ?>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-money-bill-wave"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Valor transacionado</span>
                            <span class="info-box-number"> <?= $ValorTransacionado ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-handshake"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ativos em negociação</span>
                            <span class="info-box-number"><?= $AtivosEmNegociacao ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-exchange-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total de operações</span>
                            <span class="info-box-number"><?= $TotalOperacoes ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Principais ativos negociados</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Perído Negociação: 1 Jan à 31 Dez 2024</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Ativos em negociação hoje</strong>
                                    </p>
                                    <?php foreach($AtivosBanner as $ativo): ?>
                                        <div class="progress-group">
                                            <?= $ativo['Designacao'] ?>
                                            <span class="float-right"><b><?= $ativo['QuantidadeDisponivel'] ?></b>/<?= $ativo['QuantidadeInicial'] ?></span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary" style="width: <?= ($ativo['QuantidadeDisponivel']/$ativo['QuantidadeInicial'])*100 ?>%"></div>
                                            </div>
                                        </div>
                                        <!-- /.progress-group -->
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <?php foreach($AtivosBanner as $ativo): ?>
                                    <div class="col-sm-3 col-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                            <h5 class="description-header"><?= $ativo['ValorFacial'] ?></h5>
                                            <span class="description-text"><?= $ativo['Designacao'] ?></span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Livro de Ordens</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Código </th>
                                        <th>Tipo da Operação</th>
                                        <th>Data</th>
                                        <th>Valor Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($operacoes as $operacao): ?>
                                    <tr>
                                        <td><?= $operacao['CodigoOperacao'] ?></td>
                                        <td><?= $operacao['TipoOperacao'] ?></td>
                                        <td><?= $operacao['DataOperacao'] ?></td>
                                        <td><?= $operacao['ValorTotal'] ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary float-left">Nova ordem</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todas as ordens</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Composição da oferta</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="150"></canvas>
                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <?php for ($i = 0; $i < count($TipoAtivosChart); $i++) : ?>
                                            <li><i class="far fa-circle text-dark"></i> <?= array_keys($TipoAtivosChart)[$i] ?></td></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer p-0">
                            <ul class="nav nav-pills flex-column">
                                <?php for ($i = 0; $i < count($TipoAtivosChart); $i++) : ?>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><?= array_keys($TipoAtivosChart)[$i] ?>
                                            <span class="float-right text-primary">
                                            <?= array_values($TipoAtivosChart)[$i] ?>
                                        </span>
                                        </a>
                                    </li>
                                <?php endfor; ?>

                            </ul>
                        </div>
                        <!-- /.footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    var areaChartData = {
        labels  : Object.keys(<?php echo json_encode($AtivosChart); ?>),
        datasets: [
            {
                label               : 'Digital Goods',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius          : false,
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : Object.values(<?php echo json_encode($AtivosChart); ?>)
            }
        ]
    }

    var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines : {
                    display : false,
                }
            }],
            yAxes: [{
                gridLines : {
                    display : false,
                }
            }]
        }
    }

    var donutData        = {
        labels: Object.keys(<?php echo json_encode($TipoAtivosChart); ?>),
        datasets: [
            {
                data: Object.values(<?php echo json_encode($TipoAtivosChart); ?>),
                backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }
        ]
    }

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })

</script>

<?= $this->endSection() ?>
