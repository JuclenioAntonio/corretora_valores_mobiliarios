<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FirmaModel;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Usuario extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $usuarios = $usuarioModel->findAll();

        $data = [
            'usuarios' => $usuarios
        ];

        return view('usuarios/usuarios_index',$data);
    }

    public function novo()
    {
        if ($this->request->getMethod() === 'post') {
            $usuarioModel = new UsuarioModel();

            $data = [
                'NomeCompleto' => $this->request->getPost('nomeCompleto'),
                'NomeUsuario' => $this->request->getPost('nomeUsuario'),
                'PalavraPasse' => $this->request->getPost('palavraPasse'),
                'TipoAcesso' => $this->request->getPost('tipoAcesso')

            ];

            $usuarioModel -> insert($data);
            return redirect()->to(base_url()."/usuarios");
        } else{
            return view('usuarios/usuarios_novo');
        }
    }
    public function editar($id)
    {
        if($this->request->getMethod() === 'post'){
            $usuarioModel = new UsuarioModel();

            $data = [
                'NomeCompleto' => $this->request->getPost('nomeCompleto'),
                'NomeUsuario' => $this->request->getPost('nomeUsuario'),
                'PalavraPasse' => $this->request->getPost('palavraPasse'),
                'TipoAcesso' => $this->request->getPost('tipoAcesso')
            ];

            $usuarioModel->where('CodigoUsuario',$id)->set($data)->update();

            return redirect()->to(base_url()."usuarios/detalhes/{$id}");

        }else{
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->where('CodigoUsuario',$id)->first();

            $data = [
                'usuario' => $usuario
            ];
            return view('usuarios/usuarios_editar',$data);
        }
    }

    public function detalhes($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('CodigoUsuario', $id)->first();

        $data = [
            'usuario' => $usuario
        ];

        return view('usuarios/usuarios_detalhes',$data);
    }

    public function excluir($id)
    {
        if($this->request->getMethod() === 'post'){
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->where('CodigoUsuario',$id)->delete();

            return redirect()->to(base_url()."/usuarios");
        }else{
            $data = ['CodigoUsuario' => $id];
            return view('usuarios/usuarios_excluir',$data);
        }
    }
}
