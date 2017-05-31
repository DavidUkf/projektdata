<?php
class Kalendar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kalendar_m');
    }

    public function index()
    {
        $data['Kalendar'] = $this->Kalendar_m;
        $data['title'] = 'Firmy';
        $data['header'] = 'Firmy';
        $data['header2'] = 'Zoznam firiem';

        $this->load->view('template/header');
        $this->load->view('Kalendar/index', $data);
        $this->load->view('template/footer');
    }
}