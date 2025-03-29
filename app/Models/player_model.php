<?php
class Player_model extends CI_Model {
    public function get_players_by_team($team_id) {
        return $this->db->get_where('players', ['team_id' => $team_id])->result_array();
    }
}
