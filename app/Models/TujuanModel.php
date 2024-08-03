<?php

namespace App\Models;

use CodeIgniter\Model;

class TujuanModel extends Model
{
    protected $table            = 'tujuan';
    protected $primaryKey       = 'tujuan_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["tujuan"];

}