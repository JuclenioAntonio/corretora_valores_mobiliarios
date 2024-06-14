<?php namespace App\Models;

use CodeIgniter\Model;

class CarteiraModel extends Model
{
    protected $table = 'Carteira';
    protected $allowedFields = [
        'CodigoCarteira',
        'CodigoCliente',
        'ValorTotal',
        'Rentabilidade',
        'Composicao',
        'JurosEmAtraso',
        'TotalAtivos'];
}
