<?php

namespace App\Controllers;

use App\Models\ModelEvent;
use App\Models\ModelRegistrant;
use App\Models\ModelFeedback;

class Event extends BaseController
{
    protected $modelEvent;
    protected $modelRegistrant;
    protected $modelFeedback;

    public function __construct()
    {
        $this->modelEvent = new ModelEvent();
        $this->modelRegistrant = new ModelRegistrant();
        $this->modelFeedback = new ModelFeedback();
    }

    // view index
    public function index()
    {
        $listEvent = $this->modelEvent->orderBy('date_event', 'ASC')->findAll();

        $data = [
            'title' => 'Uidesummit 2022',
            'listEvent' => $listEvent,
            'css' => 'styles.css',

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
            'name_registrant' => $fullname,
            'email_registrant' => $email,
            'date_birth_registrant' => $date_birth,
            'address_registrant' => $address,
            'id_event' => $id_event,
        ];
        $this->modelRegistrant->save($registrant);

        return redirect()->to(base_url('/'));
    }

    // view privacy
    public function privacy()
    {
        $data = [
            'title' => 'Privacy Policy | Uidesummit 2022',
            'css' => 'styles.css',
        ];
        return view('user/privacy', $data);
    }

    // view terms
    public function terms()
    {
        $data = [
            'title' => 'Terms & Conditions | Uidesummit 2022',
            'css' => 'styles.css',
        ];
        return view('user/terms', $data);
    }

    // view faq
    public function faq()
    {
        $data = [
            'title' => 'FAQ | Uidesummit 2022',
            'css' => 'styles.css',
        ];
        return view('user/faq', $data);
    }

    // function save feedback
    public function saveFeedback()
    {
        $name = $this->request->getPost('nameFeedback');
        $email = $this->request->getPost('emailFeedback');
        $phone_number = $this->request->getPost('phoneNumberFeedback');
        $message = $this->request->getPost('messageFeedback');

        $feedback = [
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'message' => $message,
        ];
        $query = $this->modelFeedback->insert($feedback);
        if ($query) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
        } else {
            session()->setFlashdata('error', 'Data gagal ditambahkan');
        }
        return redirect()->to('/');
    }
}
