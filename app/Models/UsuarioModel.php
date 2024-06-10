<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $allowedFields = [
        'CodigoUsuario',
        'NomeCompleto',
        'NomeUsuario',
        'PalavraPasse',
        'TipoAcesso'];


}
