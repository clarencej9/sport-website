<?php

namespace App\Controllers;

use App\Models\Team_model;
use CodeIgniter\Controller;

class Search extends Controller
{
    public function teams()
    {
        $query = $this->request->getGet('q');
        $model = new Team_model();

        if ($query) {
            $results = $model
                ->like('name', $query)
                ->orLike('location', $query)
                ->findAll();
        } else {
            $results = [];
        }

        return $this->response->setJSON($results);
    }
}
