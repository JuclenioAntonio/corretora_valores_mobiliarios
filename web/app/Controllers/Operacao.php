<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FirmaModel;
use App\Models\OperacaoModel;
use CodeIgniter\HTTP\ResponseInterface;

class Operacao extends BaseController
{
    public function index()
    {
        $operacaoModel = new OperacaoModel();
        $operacoes = $operacaoModel->findAll();

        $data = [
            'operacoes' => $operacoes
        ];

        return view('operacoes/operacoes_index',$data);
    }

    public function novo()
    {
        if ($this->request->getMethod() === 'post') {
            $operacaoModel = new OperacaoModel();

            var_dump($this->request->getPost());
            $data = [
                'CodigoAtivo' => $this->request->getPost('codigoAtivo'),
                'Quantidade' => $this->request->getPost('quantidade'),
                'TipoOperacao' => $this->request->getPost('tipoOperacao'),
                'ComprovativoPagamento' => $this->request->getPost('comprovativoPagamento'),
                'DepositoFeito' => $this->request->getPost('depositoFeito'),
                'LevantamentoFeito' => $this->request->getPost('levantamentoFeito'),
                'Carteira' => $this->request->getPost('carteira'),
                'ValorTotal' => 23000
            ];

            $operacaoModel -> insert($data);
            return redirect()->to(base_url()."/operacoes");
        } else{
            return view('operacoes/operacoes_novo');
        }
    }

    public function detalhes($id)
    {
        $operacaoModel = new OperacaoModel();
        $operacao = $operacaoModel->where('CodigoOperacao', $id)->first();

        $data = [
            'operacao' => $operacao
        ];

        return view('operacoes/operacoes_detalhes',$data);
    }


}
