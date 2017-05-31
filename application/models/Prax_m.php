<?php

class Prax_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_Prax($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('prax');
            return $query->result_array();
        }

        $query = $this->db->get_where('prax', array('idprax' => $id));
        return $query->row_array();
    }

    public function set_Prax($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value) {
            if ($key != 'submit')
                $data[$key] = $value;
        }

        if ($id == 0) {
            return $this->db->insert('prax', $data);
        } else {
            $this->db->where('idprax', $id);
            return $this->db->update('prax', $data);
        }
    }

    public function delete_Prax($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('prax');
    }
    function form_insert($data){
        $this->db->insert('prax', $data);
    }

    function delete_prax_id($id){
        $this->db->where('idprax', $id);
        $this->db->delete('prax');
    }
    function show_prax(){
        $query = $this->db->get('prax');
        $query_result = $query->result();
        return $query_result;
    }

    function show_prax_id($data){
        $this->db->select('*');
        $this->db->from('prax');
        $this->db->where('idprax', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_prax_id1($id,$data){
        $this->db->where('idprax', $id);
        $this->db->update('prax', $data);
    }
}