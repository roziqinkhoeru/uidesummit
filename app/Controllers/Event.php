<?php
namespace App\Controllers;

use App\Models\ModelEvent;
use App\Models\ModelRegistrant;

class Event extends BaseController
{
    protected $modelEvent;
    protected $modelRegistrant;

    public function __construct()
    {
        $this->modelEvent = new ModelEvent();
        $this->modelRegistrant = new ModelRegistrant();
    }

    public function index()
    {
        $listEvent = $this->modelEvent->orderBy('date_event', 'ASC')->findAll();

        $data =[
            'title'=>'Uidesummit 2022',
            'listEvent'=> $listEvent,

        ];
        return view('user/index', $data);
    }

    // save register
    public function saveRegister($id_event)
    {
        $fullname = $this->request->getPost('fullname');
        $email = $this->request->getPost('email');
        $date_birth = $this->request->getPost('date_birth');
        $address = $this->request->getPost('address');

        $registrant = [
            'name_registrant'=>$fullname,
            'email_registrant'=>$email,
            'date_birth_registrant'=>$date_birth,
            'address_registrant'=>$address,
            'id_event'=> $id_event,
        ];
        $this->modelRegistrant->save($registrant);

        return redirect()->to(base_url('/'));
    }
}
