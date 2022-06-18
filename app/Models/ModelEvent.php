<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    protected $table      = 'event';
    protected $primaryKey = 'id_event';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', 'email'];
}
