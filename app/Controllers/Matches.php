<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Matches extends Controller
{
    public function index()
    {
        $apiKey = '4d0ab3760b354f9a97d002c793b18585';

        $client = \Config\Services::curlrequest();

        try {
            $response = $client->request('GET', 'https://api.football-data.org/v4/matches', [
                'headers' => [
                    'X-Auth-Token' => $apiKey
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            return view('pages/matches', ['matches' => $data['matches'] ?? []]);
        } catch (\Exception $e) {
            return view('pages/matches', ['matches' => [], 'error' => $e->getMessage()]);
        }
    }
}
