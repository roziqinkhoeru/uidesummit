<?php

namespace App\Controllers;

use App\Models\ModelEvent;

class Admin extends BaseController
{
    protected $modelEvent;

    public function __construct()
    {
        $this->modelEvent = new ModelEvent();
    }

    public function index()
    {
        $data=[
            'title'=>'Dashboard Admin Uidesummit 2022',
            'css'=>'',
            'tab'=>'dashboard'
        ];
        
        return view('admin/index', $data);
    }

    public function event()
    {
        $listEvent = $this->modelEvent->orderBy('date_event', 'ASC')->findAll();

        $data=[
            'title'=>'Event Admin Uidesummit 2022',
            'css'=>'',
            'tab'=>'event',
            'listEvent'=> $listEvent,
        ];
        
        return view('admin/event', $data);
    }

    public function addEvent()
    {
        $data=[
            'title'=>'Add Event Admin Uidesummit 2022',
            'css'=>'',
            'tab'=>'event',
        ];
        
        return view('admin/addEvent', $data);
    }
}
