<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Autenticacao extends BaseController
{
    public function autenticar()
    {
        $userModel = new UsuarioModel();
        $username = $this->request->getVar('nomeUsuario');
        $password = $this->request->getVar('palavraPasse');

        $user = $userModel->where('NomeUsuario', $username)->first();

        if ($user) {
            // Login correto
            $sessionData = [
                'id'       => $user['id'],
                'username' => $user['username'],
                'email'    => $user['email'],
                'logado'   => TRUE
            ];

            $session = session();
            $session->set($sessionData);

            return view('autenticacao/perfil');

        } else {
            // Senha ou usuário errado
            return view('ativos/novo');
        }
    }
    public function login(){
        return view('autenticacao/login');
    }
    public function perfil()
    {
        if($this->request->getMethod() === 'post'){
            $usuarioModel = new UsuarioModel();

            $data = [
                'NomeCompleto' => $this->request->getPost('nomeCompleto'),
                'NomeUsuario' => $this->request->getPost('nomeUsuario'),
                'PalavraPasse' => $this->request->getPost('palavraPasse')
            ];

            $usuarioModel->where('CodigoUsuario',1)->set($data)->update();

            return redirect()->to(base_url()."autenticacao/perfil");

        }else{
            $usuarioModel = new UsuarioModel();
            $usuario = $usuarioModel->where('CodigoUsuario',1)->first();

            $data = [
                'usuario' => $usuario
            ];
            return view('autenticacao/perfil',$data);
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
