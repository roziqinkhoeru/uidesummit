<?php

namespace App\Controllers;

use App\Models\ModelEvent;
use App\Models\ModelRegistrant;
use App\Models\ModelFeedback;

class Admin extends BaseController
{
    protected $modelEvent;
    protected $modelRegistrant;
    protected $modelAuth;
    protected $modelFeedback;

    public function __construct()
    {
        $this->modelEvent = new ModelEvent();
        $this->modelRegistrant = new ModelRegistrant();
        $this->modelFeedback = new ModelFeedback();
    }

    // index
    public function index()
    {
        // get name admin
        $data = [
            'title' => 'Dashboard Admin | Uidesummit 2022',
            'css' => 'styles-admin.css',
            'tab' => 'dashboard',
        ];

        return view('admin/index', $data);
    }

    // event
    public function event()
    {
        $listEvent = $this->modelEvent->orderBy('date_event', 'ASC')->findAll();

        $data = [
            'title' => 'Event | Uidesummit 2022',
            'css' => 'styles-admin.css',
            'tab' => 'event',
            'listEvent' => $listEvent,
        ];

        return view('admin/event', $data);
    }

    // add event
    public function addEvent()
    {
        $data = [
            'title' => 'Add Event | Uidesummit 2022',
            'css' => 'styles-admin.css',
            'tab' => 'event',
        ];

        return view('admin/addEvent', $data);
    }

    // save event
    public function saveEvent()
    {
        $name_event = $this->request->getPost('nameEvent');
        $date_event = $this->request->getPost('dateEvent');
        $information_event = $this->request->getPost('informationEvent');
        $image_event = $this->request->getFile('imageEvent');

        if ($image_event->isValid() && $image_event->getSize() <= 2000000 && !$image_event->hasMoved()) {
            $imageName = $image_event->getRandomName();
            $image_event->move('./assets/img/event', $imageName);
        }

        $event = [
            'name_event' => $name_event,
            'date_event' => $date_event,
            'information_event' => $information_event,
            'image_event' => $imageName,
        ];

        $query = $this->modelEvent->insert($event);
        if ($query) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
        } else {
            session()->setFlashdata('error', 'Data gagal ditambahkan');
        }
        return redirect()->to('/event');
    }

    // edit event
    public function editEvent($id)
    {
        $event = $this->modelEvent->find($id);

        $data = [
            'title' => 'Edit Event | Uidesummit 2022',
            'css' => 'styles-admin.css',
            'tab' => 'event',
            'event' => $event,
        ];

        return view('admin/editEvent', $data);
    }

    // save edit event
    public function saveEditEvent($id_event)
    {
        $name_event = $this->request->getPost('nameEvent');
        $date_event = $this->request->getPost('dateEvent');
        $information_event = $this->request->getPost('informationEvent');
        $image_event = $this->request->getFile('imageEvent');

        $event = [
            'name_event' => $name_event,
            'date_event' => $date_event,
            'information_event' => $information_event,
            'image_event' => $image_event,
        ];

        $query = $this->modelEvent->update($id_event, $event);
        if ($query) {
            session()->setFlashdata('success', 'Data berhasil diubah');
        } else {
            session()->setFlashdata('error', 'Data gagal diubah');
        }
        return redirect()->to('/event');
    }

    // delete event
    public function deleteEvent($id)
    {
        $query = $this->modelEvent->delete($id);
        if ($query) {
            session()->setFlashdata('success', 'Data berhasil dihapus');
        } else {
            session()->setFlashdata('error', 'Data gagal dihapus');
        }
        return redirect()->to('/event');
    }

    // view registrant event
    public function viewRegistrantEvent($id_event)
    {
        $event = $this->modelEvent->find($id_event);
        $listRegistrant = $this->modelRegistrant->where('id_event', $id_event)->findAll();

        $data = [
            'title' => 'Registrant Event | Uidesummit 2022',
            'css' => 'styles-admin.css',
            'tab' => 'event',
            'event' => $event,
            'listRegistrant' => $listRegistrant,
        ];

        return view('admin/viewRegistrantEvent', $data);
    }

    // view feedback
    public function viewFeedback()
    {
        $listFeedback = $this->modelFeedback->orderBy('id', 'DESC')->findAll();

        $data = [
            'title' => 'Feedback | Uidesummit 2022',
            'css' => 'styles-admin.css',
            'tab' => 'feedback',
            'listFeedback' => $listFeedback,
        ];

        return view('admin/viewFeedback', $data);
    }
}
