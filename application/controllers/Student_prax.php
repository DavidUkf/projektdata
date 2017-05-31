<?php

class Student_prax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_prax_m');
    }

    public function index()
    {
        $data['Student_prax'] = $this->Student_prax_m->get_Student_prax();
        $data['title'] = 'Studenti a prax';
        $data['header'] = 'Studenti a prax';
        $data['header2'] = 'Studenti a prax';

        $this->load->view('template/header');
        $this->load->view('Student_prax/index', $data);
        $this->load->view('template/footer');
    }
    function delete_Student_prax_id() {
        $id = $this->uri->segment(3);
        $this->Student_prax_m->delete_Student_prax_id($id);
        redirect(base_url().'index.php/Student_prax');
    }

    public function insert()
    {$data['Student_prax'] = $this->Student_prax_m->get_Student_prax();
        $data['title'] = 'Studenti a prax';
        $data['header'] = 'Studenti a prax';
        $data['header2'] = 'Studenti a prax';

        $this->load->view('template/header');
        $this->load->view('Student_prax/view', $data);
        $this->load->view('template/footer');
    }

    function insertStudent_prax()
    {
        $data = array(
            'Student_idStudent' => $this->input->post('dStudent_idStudent'),
            'prax_idprax' => $this->input->post('dprax_idprax')
        );
        $this->Student_prax_m->form_insert($data);
        redirect(base_url().'index.php/Student_prax');

    }
    function show_Student_prax_id() {
        $id = $this->uri->segment(3);
        $data['Student_prax'] = $this->Student_prax_m->show_Student_prax();
        $data['single_Student_prax'] = $this->Student_prax_m->show_Student_prax_id($id);
        $data['Student_prax'] = $this->Student_prax_m->get_Student_prax();
        $data['title'] = 'Studenti a prax';
        $data['header'] = 'Studenti a prax';
        $data['header2'] = 'Studenti a prax';

        $this->load->view('template/header');
        $this->load->view('Student_prax/editsp', $data);
        $this->load->view('template/footer');
    }

    function update_Student_prax_id1() {
        $id= $this->input->post('did');
        $data = array(
            'Student_idStudent' => $this->input->post('dStudent_idStudent'),
            'prax_idprax' => $this->input->post('dprax_idprax')
        );
        $this->Student_prax_m->update_Student_prax_id1($id,$data);
        $this->show_Student_prax_id();
        redirect(base_url().'index.php/Student_prax');
    }
}