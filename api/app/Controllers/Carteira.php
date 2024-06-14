<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarteiraModel;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Carteira extends BaseController
{
    public function index()
    {
        $carteiraModel = new CarteiraModel();
        $carteiras = $carteiraModel->findAll();

        $data = [
            'carteiras' => $carteiras
        ];

        return view('carteiras/carteiras_index',$data);
    }

    public function editar($id)
    {
        if($this->request->getMethod() === 'post'){
            $carteiraModel = new CarteiraModel();

            $data = [
                'ValorTotal' => $this->request->getPost('valorTotal'),
                'Rentabilidade' => $this->request->getPost('rentabilidade'),
                'Composicao' => $this->request->getPost('composicao'),
                'JurosEmAtraso' => $this->request->getPost('jurosEmAtraso'),
                'TotalAtivos' => $this->request->getPost('totalAtivos')
            ];

            $carteiraModel->where('CodigoCarteira',$id)->set($data)->update();

            return redirect()->to(base_url()."carteiras/detalhes/{$id}");

        }else{
            $carteiraModel = new CarteiraModel();
            $carteira = $carteiraModel->where('CodigoCarteira',$id)->first();

            $data = [
                'carteira' => $carteira
            ];
            return view('carteiras/carteiras_editar',$data);
        }
    }

    public function detalhes($id)
    {
        $carteiraModel = new CarteiraModel();
        $carteira = $carteiraModel->where('CodigoCarteira', $id)->first();

        $data = [
            'carteira' => $carteira
        ];

        return view('carteiras/carteiras_detalhes',$data);
    }

}
