<?php

class Prax_firma extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prax_firma_m');
    }

    public function index()
    {
        $data['Prax_firma'] = $this->Prax_firma_m->get_Prax_firma();
        $data['title'] = 'prax vo firmach';
        $data['header'] = 'prax vo firmach';
        $data['header2'] = 'prax vo firmach';

        $this->load->view('template/header');
        $this->load->view('Prax_firma/index', $data);
        $this->load->view('template/footer');
    }
    function delete_Prax_firma_id() {
        $id = $this->uri->segment(3);
        $this->Prax_firma_m->delete_Prax_firma_id($id);
        redirect(base_url().'index.php/Prax_firma');
    }

    public function insert()
    {$data['Prax_firma'] = $this->Prax_firma_m->get_Prax_firma();
        $data['title'] = 'prax vo firmach';
        $data['header'] = 'prax vo firmach';
        $data['header2'] = 'prax vo firmach';

        $this->load->view('template/header');
        $this->load->view('Prax_firma/view', $data);
        $this->load->view('template/footer');
    }

    function insertPrax_firma()
    {
        $data = array(
            'prax_idprax' => $this->input->post('dprax_idprax'),
            'Firma_idFirma' => $this->input->post('dFirma_idFirma')
        );
        $this->Prax_firma_m->form_insert($data);
        redirect(base_url().'index.php/Prax_firma');

    }
    function show_Prax_firma_id() {
        $id = $this->uri->segment(3);
        $data['Prax_firma'] = $this->Prax_firma_m->show_Prax_firma();
        $data['single_Prax_firma'] = $this->Prax_firma_m->show_Prax_firma_id($id);
        $data['Prax_firma'] = $this->Prax_firma_m->get_Prax_firma();
        $data['title'] = 'prax vo firmach';
        $data['header'] = 'prax vo firmach';
        $data['header2'] = 'prax vo firmach';

        $this->load->view('template/header');
        $this->load->view('Prax_firma/editpf', $data);
        $this->load->view('template/footer');
    }

    function update_Prax_firma_id1() {
        $id= $this->input->post('did');
        $data = array(
            'prax_idprax' => $this->input->post('dprax_idprax'),
            'Firma_idFirma' => $this->input->post('dFirma_idFirma')
        );
        $this->Prax_firma_m->update_Prax_firma_id1($id,$data);
        $this->show_Prax_firma_id();
        redirect(base_url().'index.php/Prax_firma');
    }
}