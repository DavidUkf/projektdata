<?php
class Graf1 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Graf1_m');
    }

    public function index()
    {
        $data['Graf'] = $this->Graf1_m;
        $data['title'] = 'Graf';
        $data['header'] = 'Graf';
        $data['header2'] = 'Grafy';

        $this->load->view('template/header');
        $this->load->view('Graf1/index', $data);
        $this->load->view('template/footer');
    }
}