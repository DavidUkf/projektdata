<?php
class Graf extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Graf_m');
    }

    public function index()
    {
        $data['Graf'] = $this->Graf_m;
        $data['title'] = 'Graf';
        $data['header'] = 'Graf';
        $data['header2'] = 'Grafy';

        $this->load->view('template/header');
        $this->load->view('Graf/index', $data);
        $this->load->view('template/footer');
    }
}