<?php

class Firmy extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Firmy_m');
    }

    public function index()
    {
        $data['Firmy'] = $this->Firmy_m->get_Firmy();
        $data['title'] = 'Firmy';
        $data['header'] = 'Firmy';
        $data['header2'] = 'Zoznam firiem';

        $this->load->view('template/header');
        $this->load->view('Firmy/index', $data);
        $this->load->view('template/footer');
    }
    function delete_firmy_id() {
        $id = $this->uri->segment(3);
        $this->Firmy_m->delete_firmy_id($id);
        redirect(base_url().'index.php/Firmy');
    }

    public function insert()
    {$data['Firmy'] = $this->Firmy_m->get_Firmy();
        $data['title'] = 'Firmy';
        $data['header'] = 'Firmy';
        $data['header2'] = 'Zoznam firiem';

        $this->load->view('template/header');
        $this->load->view('Firmy/view', $data);
        $this->load->view('template/footer');
    }

    function insertFirmy()
    {
        $data = array(
            'nazov' => $this->input->post('dnazov'),
            'adresa' => $this->input->post('dadresa')
        );
        $this->Firmy_m->form_insert($data);
        redirect(base_url().'index.php/Firmy');

    }
    function show_firmy_id() {
        $id = $this->uri->segment(3);
        $data['Firmy'] = $this->Firmy_m->show_firmy();
        $data['single_firmy'] = $this->Firmy_m->show_firmy_id($id);
        $data['Firmy'] = $this->Firmy_m->get_Firmy();
        $data['title'] = 'Firmy';
        $data['header'] = 'Firmy';
        $data['header2'] = 'zoznam firiem';

        $this->load->view('template/header');
        $this->load->view('Firmy/editf', $data);
        $this->load->view('template/footer');
    }

    function update_firmy_id1() {
        $id= $this->input->post('did');
        $data = array(
            'nazov' => $this->input->post('dnazov'),
            'adresa' => $this->input->post('dadresa')
        );
        $this->Firmy_m->update_firmy_id1($id,$data);
        $this->show_firmy_id();
        redirect(base_url().'index.php/Firmy');
    }
}