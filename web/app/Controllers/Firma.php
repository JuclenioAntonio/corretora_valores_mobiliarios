<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CorretorModel;
use App\Models\FirmaModel;
use CodeIgniter\HTTP\ResponseInterface;

class Firma extends BaseController
{
    public function index()
    {
        $firmaModel = new FirmaModel();
        $firmas = $firmaModel->findAll();

        $data = [
            'firmas' => $firmas
        ];

        return view('firmas/firmas_index',$data);
    }

    public function novo()
    {
        if ($this->request->getMethod() === 'post') {
            $firmaModel = new FirmaModel();

            $data = [
                'Nome' => $this->request->getPost('nome'),
                'TaxaJurosDiaria' => $this->request->getPost('taxaJurosDiaria'),
                'Endereco' => $this->request->getPost('endereco')

            ];

            $firmaModel -> insert($data);
            return redirect()->to(base_url()."/firmas");
        } else{
            return view('firmas/firmas_novo');
        }
    }
    public function editar($id)
    {
        if($this->request->getMethod() === 'post'){
            $firmaModel = new FirmaModel();

            $data = [
                'Nome' => $this->request->getPost('nome'),
                'TaxaJurosDiaria' => $this->request->getPost('taxaJurosDiaria'),
                'Endereco' => $this->request->getPost('endereco')
            ];

            $firmaModel->where('CodigoFirma',$id)->set($data)->update();

            return redirect()->to(base_url()."firmas/detalhes/{$id}");

        }else{
            $firmaModel = new FirmaModel();
            $firma = $firmaModel->where('CodigoFirma',$id)->first();

            $data = [
                'firma' => $firma
            ];
            return view('firmas/firmas_editar',$data);
        }
    }

    public function detalhes($id)
    {
        $firmaModel = new FirmaModel();
        $firma = $firmaModel->where('CodigoFirma', $id)->first();

        $data = [
            'firma' => $firma
        ];

        return view('firmas/firmas_detalhes',$data);
    }

    public function excluir($id)
    {
        if($this->request->getMethod() === 'post'){
            $firmaModel = new FirmaModel();
            $firma = $firmaModel->where('CodigoFirma',$id)->delete();

            return redirect()->to(base_url()."/firmas");
        }else{
            $data = ['CodigoFirma' => $id];
            return view('firmas/firmas_excluir',$data);
        }
    }
}
