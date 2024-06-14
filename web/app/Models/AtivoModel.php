<?php namespace App\Models;

use CodeIgniter\Model;

class AtivoModel extends Model
{
    protected $table = 'Ativo';
    protected $allowedFields = [
        'CodigoAtivo',
        'Designacao',
        'TipoAtivo',
        'DataEmissao',
        'ValorFacial',
        'QuantidadeDisponivel',
        'NomeEmpresa',
        'QuantidadeInicial'];
}
