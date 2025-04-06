<?php

namespace App\Controllers;

use App\Models\Team_model;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends Controller
{
    public function view($page = 'home')
    {
        // Make sure the page file exists
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw PageNotFoundException::forPageNotFound();
        }

        $data = [];

        // Load teams if the page is 'teams'
        if ($page === 'teams') {
            $model = new Team_model();
            $data['teams'] = $model->findAll();
        }

        // Render header + page + footer
        echo view('templates/header', ['title' => ucfirst($page)]);
        echo view('pages/' . $page, $data);
        echo view('templates/footer');
    }
}
