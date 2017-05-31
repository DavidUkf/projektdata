<?php

class Prax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prax_m');
    }

    public function index()
    {
        $data['Prax'] = $this->Prax_m->get_Prax();
        $data['title'] = 'Prax';
        $data['header'] = 'Prax';
        $data['header2'] = 'Zoznam odbornej praxe';

        $this->load->view('template/header');
        $this->load->view('Prax/index', $data);
        $this->load->view('template/footer');
    }
    function delete_prax_id() {
        $id = $this->uri->segment(3);
        $this->Prax_m->delete_prax_id($id);
        redirect(base_url().'index.php/Prax');
    }

    public function insert()
    {
        $data['Prax'] = $this->Prax_m->get_Prax();
        $data['title'] = 'Prax';
        $data['header'] = 'Prax';
        $data['header2'] = 'Zoznam odbornej praxe';

        $this->load->view('template/header');
        $this->load->view('Prax/view', $data);
        $this->load->view('template/footer');
    }

    function insertPrax()
    {
        $data = array(
            'poznamka' => $this->input->post('dpoznamka'),
            'zaciatok_praxe' => $this->input->post('dzaciatok_praxe'),
            'koniec_praxe' => $this->input->post('dkoniec_praxe'),
            'uspesne_ukoncenie' => $this->input->post('duspesne_ukoncenie'),
            'zodpovedny' => $this->input->post('dzodpovedny')
        );
        $this->Prax_m->form_insert($data);
        redirect(base_url().'index.php/Prax');
    }
    function show_prax_id() {
        $id = $this->uri->segment(3);
        $data['prax'] = $this->Prax_m->show_prax();
        $data['single_prax'] = $this->Prax_m->show_prax_id($id);
        $data['prax'] = $this->Prax_m->get_Prax();
        $data['title'] = 'Odbroná prax';
        $data['header'] = 'Odborná prax';
        $data['header2'] = 'zoznam odbornej praxe';

        $this->load->view('template/header');
        $this->load->view('Prax/editp', $data);
        $this->load->view('template/footer');
    }

    function update_prax_id1() {
        $id= $this->input->post('did');
        $data = array(
            'poznamka' => $this->input->post('dpoznamka'),
            'zaciatok_praxe' => $this->input->post('dzaciatok_praxe'),
            'koniec_praxe' => $this->input->post('dkoniec_praxe'),
            'uspesne_ukoncenie' => $this->input->post('duspesne_ukoncenie'),
            'zodpovedny' => $this->input->post('dzodpovedny')

        );
        $this->Prax_m->update_prax_id1($id,$data);
        $this->show_prax_id();
        redirect(base_url().'index.php/Prax');
    }

}