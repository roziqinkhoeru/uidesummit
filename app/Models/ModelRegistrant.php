<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegistrant extends Model
{
    protected $table      = 'registrant';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'name_registrant','email_registrant','date_brith__registrant','address_registrant','id_event'];
}
