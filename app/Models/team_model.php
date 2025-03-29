<?php

namespace App\Models;

use CodeIgniter\Model;

class Team_model extends Model
{
    protected $table = 'teams'; // name of your database table
    protected $primaryKey = 'team_id';
    protected $allowedFields = ['team_name', 'country', 'founded', 'city', 'stadium'];
}
