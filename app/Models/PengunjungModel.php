<?php

namespace App\Models;

use CodeIgniter\Model;

class PengunjungModel extends Model
{
    protected $table            = 'pengunjung';
    protected $primaryKey       = 'visitor_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["nama", "email",	"perusahaan", "department_id", "tujuan_id", "waktu_masuk", "waktu_keluar", "catatan"];

}