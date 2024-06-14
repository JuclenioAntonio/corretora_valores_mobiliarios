<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AtivoModel;
use CodeIgniter\Format\JSONFormatter;
use CodeIgniter\HTTP\ResponseInterface;

class Ativo extends BaseController
{
    public function index()
    {
        $ativoModel = new AtivoModel();
        $ativos = $ativoModel->findAll();

        $data = [
            'ativos' => $ativos
        ];

        return json_encode($data);
    }
    public function novo()
    {
        $method = $this->request->getMethod();
        if($method === "post"){
            $ativoModel = new AtivoModel();

            $data = [
                'Designacao' => $this->request->getPost('designacao'),
                'TipoAtivo' => $this->request->getPost('tipoAtivo'),
                'DataEmissao' => $this->request->getPost('dataEmissao'),
                'ValorFacial' => $this->request->getPost('valorFacial'),
                'QuantidadeDisponivel' => $this->request->getPost('quantidadeInicial'),
                'QuantidadeInicial' => $this->request->getPost('quantidadeInicial'),
                'NomeEmpresa' => $this->request->getPost('nomeEmpresa'),
            ];

            $ativoModel->insert($data);
            return redirect()->to(base_url()."/ativos");

        }else{
            return view('ativos/ativos_novo');
        }
    }
    public function editar($id)
    {
        $method = $this->request->getMethod();
        if ($method === 'post') {
            $ativoModel = new AtivoModel();

            $data = [
                'Designacao' => $this->request->getVar('designacao'),
                'TipoAtivo' => $this->request->getVar('tipoAtivo'),
                'ValorFacial' => $this->request->getVar('valorFacial'),
                'DataEmissao' => $this->request->getVar('dataEmissao'),
                'QuantidadeDisponivel' => $this->request->getVar('quantidadeDisponivel'),
                'NomeEmpresa' => $this->request->getVar('nomeEmpresa')
            ];

            $ativoModel->where('CodigoAtivo', $id)->set($data)->update();

            return redirect()->to(base_url()."ativos/detalhes/{$id}");

        } else {
            $ativoModel = new AtivoModel();
            $ativo = $ativoModel->where('CodigoAtivo', $id)->first();
            $data = ['ativo' => $ativo];

            return view('ativos/ativos_editar', $data);
        }
    }
    public function detalhes($id)
    {
        $ativoModel = new AtivoModel();
        $ativo = $ativoModel->where('CodigoAtivo', $id)->first();

        $data = [
            'ativo'  => $ativo
        ];
        return view('ativos/ativos_detalhes',$data);
    }
    public function excluir($id)
    {
        $method = $this->request->getMethod();
        if($method === 'post'){
            $ativoModel = new AtivoModel();
            $ativoModel->where('CodigoAtivo', $id)->delete();

            return redirect()->to(base_url()."/ativos");
        }else{
            $ativoModel = new AtivoModel();
            $ativo = $ativoModel->where('CodigoAtivo', $id)->first();

            $data = [
                'ativo'  => $ativo
            ];
            return view("ativos/ativos_excluir",$data);
        }

    }
}
