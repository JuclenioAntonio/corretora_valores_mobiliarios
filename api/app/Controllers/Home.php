<?php

namespace App\Controllers;

use App\Models\AtivoModel;
use App\Models\OperacaoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $ativoModel = new AtivoModel();
        $operacaoModel = new OperacaoModel();

        $total = $operacaoModel->selectSum('ValorTotal')->first();
        $negociacao = $operacaoModel->selectCount('CodigoAtivo')->first();
        $totalAtivos= $ativoModel->countAll();
        $operacoes = $operacaoModel->findAll();
        $totalOperacoes = $operacaoModel->countAll();
        $ativosBanner = $ativoModel->findAll(5);

        $valorTransacionado = $total['ValorTotal'] ?? 0;
        $ativosEmNegociacao = $negociacao['CodigoAtivo'] ?? 0;

        // gráfico de barras
        $dados = [];
        for ($mes = 1; $mes <= 12; $mes++) {
            $dataInicio = date('Y-m-d', mktime(0, 0, 0, $mes, 1, date('Y')));
            $dataFim = date('Y-m-d', mktime(0, 0, 0, $mes, 31, date('Y')));

            $valorTotal = $operacaoModel->selectSum('ValorTotal')
                ->where('DataOperacao >=', $dataInicio)
                ->where('DataOperacao <=', $dataFim)
                ->first()['ValorTotal'] ?? 0;

            $nomeMes = strftime('%B', mktime(0, 0, 0, $mes, 1, date('Y')));

            $dados[$nomeMes] = $valorTotal;
        }

        // Gráfico de donut
        $dadosDonut = [];
        $tiposAtivos = $ativoModel->select('TipoAtivo')->distinct()->get()->getResultArray();

        foreach ($tiposAtivos as $tipoAtivo) {
            $valorTotal = $ativoModel->selectSum('ValorFacial')
                ->where('TipoAtivo', $tipoAtivo['TipoAtivo'])
                ->first()['ValorFacial'] ?? 0;

            $dadosDonut[$tipoAtivo['TipoAtivo']] = $valorTotal;
        }


        $data = [
            'operacoes'=> $operacoes,
            'TotalAtivos' => $totalAtivos,
            'TotalOperacoes' => $totalOperacoes,
            'ValorTransacionado' => number_format($valorTransacionado, 2, ',', '.'),
            'AtivosEmNegociacao' => $ativosEmNegociacao,
            'AtivosBanner' => $ativosBanner,
            'AtivosChart' => $dados,
            'TipoAtivosChart' => $dadosDonut

        ];


        return view('painel_estatistico', $data);
    }
    public function contatos(): string
    {
        return view('contatos');
    }
    public function sobre_nos(): string
    {
        return view('sobre_nos');
    }
}
