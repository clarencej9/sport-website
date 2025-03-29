<?php
class Matches extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Match_model');
    }

    public function index() {
        $data['matches'] = $this->Match_model->get_all_matches();
        $this->load->view('matches_view', $data);
    }

    public function upcoming() {
        $data['matches'] = $this->Match_model->get_upcoming_matches();
        $this->load->view('matches_view', $data);
    }

    public function completed() {
        $data['matches'] = $this->Match_model->get_completed_matches();
        $this->load->view('matches_view', $data);
    }
}
