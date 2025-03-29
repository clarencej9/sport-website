<?php

namespace App\Controllers;

use App\Models\Team_model;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends Controller
{
    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data = [];

        if ($page === 'teams') {
            $model = new Team_model();
            $data['teams'] = $model->findAll(); // fetch all from the DB
        }

        return view('pages/' . $page, $data);
    }
}
