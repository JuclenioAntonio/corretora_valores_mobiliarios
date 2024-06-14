<?php namespace App\Models;

use CodeIgniter\Model;

class OperacaoModel extends Model
{
    protected $table = 'Operacao';
    protected $allowedFields = [
        'CodigoOperacao',
        'DataOperacao',
        'CodigoAtivo',
        'Quantidade',
        'TipoOperacao',
        'ComprovativoPagamento',
        'DepositoFeito',
        'LevantamentoFeito',
        'ValorTotal'
        ];

}
