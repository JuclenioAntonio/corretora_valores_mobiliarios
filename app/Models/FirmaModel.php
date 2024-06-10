<?php namespace App\Models;

use CodeIgniter\Model;

class FirmaModel extends Model
{
    protected $table = 'Firma';
    protected $allowedFields = ['CodigoFirma', 'Nome', 'TaxaJurosDiaria', 'Endereco'];
}
