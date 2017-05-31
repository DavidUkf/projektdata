<?php

class Studenti_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_Studenti($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('student');
            return $query->result_array();
        }

        $query = $this->db->get_where('student', array('idStudent' => $id));
        return $query->row_array();
    }

    public function delete_Studenti($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('student');
    }

    function form_insert($data){
        $this->db->insert('student', $data);
    }

    function delete_studenti_id($id){
        $this->db->where('idStudent', $id);
        $this->db->delete('student');
    }

    function show_studenti(){
        $query = $this->db->get('student');
        $query_result = $query->result();
        return $query_result;
    }

    function show_studenti_id($data){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('idStudent', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_studenti_id1($id,$data){
        $this->db->where('idStudent', $id);
        $this->db->update('student', $data);
    }

}