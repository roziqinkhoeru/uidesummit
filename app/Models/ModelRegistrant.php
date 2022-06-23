<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegistrant extends Model
{
    protected $table      = 'registrant';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id', 'name_registrant', 'email_registrant', 'date_birth_registrant', 'address_registrant', 'id_event'];

    // join table event
    // public function joinEvent($id_event)
    // {
    //     return $this->select('event.*, registrant.*')
    //         ->join('event', 'event.id_event = registrant.id_event')
    //         ->where('registrant.id_event', $id_event)
    //         ->findAll();
    // }
}
