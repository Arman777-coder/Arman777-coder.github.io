<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\FormModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function saveForm()
    {
        $formData = $this->request->getPost('form_data');

        $formModel = new FormModel();
        $formModel->save([
            'title'=> 'www',
            'description' => $formData
        ]);

        return $this->response->setJSON(['status' => 'success']);
    }

}
