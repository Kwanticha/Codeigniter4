<?php
namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controller;

class NamesCrud extends Controller {
    // show names list
    public function index() {
        $NameModel = new NameModel();
        $data['users'] = $NameModel->orderBy('Id', 'DESC')->findAll();
        return view('memberlist', $data);
    }

    // add name form
    public function create() {
        return view('membername');
    }

    // add data 
    public function store() {
        $NameModel = new NameModel();
        $data = [
            'Firsname' => $this->request->getVar('Firsname'),
            'Lastname' => $this->request->getVar('Lastname'),
            'Email' => $this->request->getVar('Email'),
            'Time'=> $this->request->getVar('Time'),
            'Time_in' => $this->request->getVar('Time_in'),
            'Time_out' => $this->request->getVar('Time_out')
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/memberlist'));
    }
}