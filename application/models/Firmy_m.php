<?php

class Firmy_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_Firmy($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('firma');
            return $query->result_array();
        }

        $query = $this->db->get_where('firma', array('idFirma' => $id));
        return $query->row_array();
    }

    public function set_Firmy($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value) {
            if ($key != 'submit')
                $data[$key] = $value;
        }

        if ($id == 0) {
            return $this->db->insert('firma', $data);
        } else {
            $this->db->where('idFirma', $id);
            return $this->db->update('firma', $data);
        }
    }


    function form_insert($data){
        $this->db->insert('firma', $data);
    }

    function delete_firmy_id($id){
        $this->db->where('idFirma', $id);
        $this->db->delete('firma');
    }
    function show_firmy(){
        $query = $this->db->get('firma');
        $query_result = $query->result();
        return $query_result;
    }

    function show_firmy_id($data){
        $this->db->select('*');
        $this->db->from('firma');
        $this->db->where('idFirma', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_firmy_id1($id,$data){
        $this->db->where('idFirma', $id);
        $this->db->update('firma', $data);
    }

}