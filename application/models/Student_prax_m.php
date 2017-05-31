<?php

class Student_prax_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_Student_prax($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('student_has_prax');
            return $query->result_array();
        }

        $query = $this->db->get_where('student_has_prax', array('ID' => $id));
        return $query->row_array();
    }

    public function set_Student_prax($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value) {
            if ($key != 'submit')
                $data[$key] = $value;
        }

        if ($id == 0) {
            return $this->db->insert('student_has_prax', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('student_has_prax', $data);
        }
    }


    function form_insert($data){
        $this->db->insert('student_has_prax', $data);
    }

    function delete_Student_prax_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('student_has_prax');
    }
    function show_Student_prax(){
        $query = $this->db->get('student_has_prax');
        $query_result = $query->result();
        return $query_result;
    }

    function show_Student_prax_id($data){
        $this->db->select('*');
        $this->db->from('student_has_prax');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_Student_prax_id1($id,$data){
        $this->db->where('ID', $id);
        $this->db->update('student_has_prax', $data);
    }

}