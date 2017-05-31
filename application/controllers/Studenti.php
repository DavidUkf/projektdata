<?php

class Studenti extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Studenti_m');
    }

    public function index()
    {
        $data['Studenti'] = $this->Studenti_m->get_Studenti();
        $data['title'] = 'Studenti';
        $data['header'] = 'Studenti';
        $data['header2'] = 'List vsetkych studentov';

        $this->load->view('template/header');
        $this->load->view('Studenti/index', $data);
        $this->load->view('template/footer');
    }

    function delete_studenti_id() {
        $id = $this->uri->segment(3);
        $this->Studenti_m->delete_studenti_id($id);
        redirect(base_url().'index.php/Studenti');
    }

    public function insert()
    {
        $data['Studenti'] = $this->Studenti_m->get_Studenti();
        $data['title'] = 'Studenti';
        $data['header'] = 'Studenti';
        $data['header2'] = 'List vsetkych studentov';

        $this->load->view('template/header');
        $this->load->view('Studenti/view', $data);
        $this->load->view('template/footer');
    }

    function insertStudenti()
    {
        $data = array(
            'meno' => $this->input->post('dmeno'),
            'priezvisko' => $this->input->post('dpriezvisko'),
            'studprogram' => $this->input->post('dstudprogram'),
            'rocnik' => $this->input->post('drocnik')
        );
        $this->Studenti_m->form_insert($data);
        redirect(base_url().'index.php/Studenti');

    }
    function show_studenti_id() {
        $id = $this->uri->segment(3);
        $data['student'] = $this->Studenti_m->show_studenti();
        $data['single_student'] = $this->Studenti_m->show_studenti_id($id);
        $data['student'] = $this->Studenti_m->get_Studenti();
        $data['title'] = 'Studenti';
        $data['header'] = 'Studenti';
        $data['header2'] = 'zoznam studentov';

        $this->load->view('template/header');
        $this->load->view('Studenti/edits', $data);
        $this->load->view('template/footer');
    }

    function update_studenti_id1() {
        $id= $this->input->post('did');
        $data = array(
            'meno' => $this->input->post('dmeno'),
            'priezvisko' => $this->input->post('dpriezvisko'),
            'studprogram' => $this->input->post('dstudprogram'),

            'rocnik' => $this->input->post('drocnik')

        );
        $this->Studenti_m->update_studenti_id1($id,$data);
        $this->show_studenti_id();
        redirect(base_url().'index.php/Studenti');
    }

}