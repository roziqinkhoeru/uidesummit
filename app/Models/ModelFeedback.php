<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFeedback extends Model
{
    protected $table      = 'feedback';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['name', 'email', 'phone_number', 'message'];
}
