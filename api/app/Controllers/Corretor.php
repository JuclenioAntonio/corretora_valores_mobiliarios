<?php

namespace App\Controllers;


use App\Models\CorretorModel;
use App\Models\FirmaModel;

class Corretor extends BaseController
{
    public function index()
    {
        $corretorModel = new CorretorModel();
        $corretores = $corretorModel->findAll();

        $data = [
            'corretores' => $corretores
        ];

        return view('corretores/corretores_index',$data);
    }

    public function novo()
    {
        if ($this->request->getMethod() === 'post') {
            $corretorModel = new CorretorModel();

            $data = [
                'NomeCompleto' => $this->request->getPost('nomeCompleto'),
                'NumeroMecanografico' => $this->request->getPost('numeroMecanografico'),
                'DataAdmissao' => $this->request->getPost('dataAdmissao'),
                'DataRescisao' => $this->request->getPost('dataRescisao'),
                'Telefone' => $this->request->getPost('telefone'),
                'SalarioBase' => $this->request->getPost('salarioBase'),
                'ComissaoMensal' => $this->request->getPost('comissaoMensal'),
                'CodigoFirma' => $this->request->getPost('codigoFirma')
            ];

            $corretorModel -> insert($data);
            return redirect()->to(base_url()."/corretores");
        } else{
            $firmaModel = new FirmaModel();
            $firmas = $firmaModel->findAll();

            $data = [
                'firmas' => $firmas
            ];
            return view('corretores/corretores_novo',$data);
        }
    }
    public function editar($id)
    {
        $corretorModel = new CorretorModel();
        if($this->request->getMethod() === 'post'){
            $data = [
                'NomeCompleto' => $this->request->getPost('nomeCompleto'),
                'NumeroMecanografico' => $this->request->getPost('numeroMecanografico'),
                'DataAdmissao' => $this->request->getPost('dataAdmissao'),
                'DataRescisao' => $this->request->getPost('dataRescisao'),
                'Telefone' => $this->request->getPost('telefone'),
                'SalarioBase' => $this->request->getPost('salarioBase'),
                'ComissaoMensal' => $this->request->getPost('comissaoMensal'),
                'Firma' => $this->request->getPost('firma')
            ];

            $corretorModel->where('CodigoCorretor',$id)->set($data)->update();

            return redirect()->to(base_url()."corretores/detalhes/{$id}");

        }else{
            $corretor = $corretorModel->where('CodigoCorretor',$id)->first();

            $data = [
                'corretor' => $corretor
            ];

            return view('corretores/corretores_editar',$data);
        }
    }

    public function detalhes($id)
    {
        $corretorModel = new CorretorModel();
        $corretor = $corretorModel->where('CodigoCorretor', $id)->first();

        $data = [
            'corretor' => $corretor
        ];

        return view('corretores/corretores_detalhes',$data);
    }
    public function excluir($id)
    {
        if($this->request->getMethod() === 'post'){
            $corretorModel = new CorretorModel();
            $corretor = $corretorModel->where('CodigoCorretor',$id)->delete();

            return redirect()->to(base_url()."/corretores");
        }else{
            $data = ['CodigoCorretor' => $id];
            return view('corretores/corretores_excluir',$data);
        }

    }
}



