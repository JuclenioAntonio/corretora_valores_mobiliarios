<?php namespace App\Models;

use CodeIgniter\Model;

class CorretorModel extends Model
{
    protected $table = 'Corretor';
    protected $allowedFields = ['CodigoCorretor', 'NomeCompleto', 'NumeroMecanografico', 'DataAdmissao', 'DataRescisao', 'Telefone','SalarioBase','ComissaoMensal'];

}
