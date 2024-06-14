<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AtivoModel;
use App\Models\ClienteModel;
use CodeIgniter\HTTP\ResponseInterface;

class Cliente extends BaseController
{
    public function index()
    {
        $clienteModel = new ClienteModel();
        $clientes = $clienteModel->findAll();

        $data = [
            'clientes' => $clientes
        ];

        return view('clientes/clientes_index',$data);
    }

    public function novo()
    {
        if ($this->request->getMethod() === 'post') {
            $clienteModel = new ClienteModel();

            $data = [
                'NomeCompleto' => $this->request->getPost('nomeCompleto'),
                'Nif' => $this->request->getPost('nif'),
                'Endereco' => $this->request->getPost('endereco'),
                'Telefone' => $this->request->getPost('telefone')
            ];

            $clienteModel -> insert($data);
            return redirect()->to(base_url()."/clientes");
        } else{
            return view('clientes/clientes_novo');
        }
    }
    public function editar($id)
    {
        if($this->request->getMethod() === 'post'){
            $clienteModel = new ClienteModel();

            $data = [
                'NomeCompleto' => $this->request->getVar('nomeCompleto'),
                'Nif' => $this->request->getVar('nif'),
                'Endereco' => $this->request->getVar('endereco'),
                'Telefone' => $this->request->getVar('telefone')
            ];

            $clienteModel->where('CodigoCliente',$id)->set($data)->update();

            return redirect()->to(base_url()."clientes/detalhes/{$id}");

        }else{
            $clienteModel = new ClienteModel();
            $cliente = $clienteModel->where('CodigoCliente',$id)->first();

            $data = [
                'cliente' => $cliente
            ];
            return view('clientes/clientes_editar',$data);
        }

    }

    public function detalhes($id)
    {
        $clienteModel = new ClienteModel();
        $cliente = $clienteModel->where('CodigoCliente', $id)->first();

        $data = [
            'cliente' => $cliente
        ];

        return view('clientes/clientes_detalhes',$data);
    }

    public function excluir($id)
    {
        if($this->request->getMethod() === 'post'){
            $clienteModel = new ClienteModel();
            $cliente = $clienteModel->where('CodigoCliente',$id)->delete();

            return redirect()->to(base_url()."/clientes");
        }else{
            $data = ['CodigoCliente' => $id];
            return view('clientes/clientes_excluir',$data);
        }

    }
}
