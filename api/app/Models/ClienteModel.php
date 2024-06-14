<?php namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'Cliente';
    protected $allowedFields = ['CodigoCliente', 'NomeCompleto', 'Nif','Endereco','Telefone'];

}
