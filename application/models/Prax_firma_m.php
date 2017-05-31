<?php

class Prax_firma_m extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_Prax_firma($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('prax_has_firma');
            return $query->result_array();
        }

        $query = $this->db->get_where('prax_has_firma', array('ID' => $id));
        return $query->row_array();
    }

    public function set_Prax_firma($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value) {
            if ($key != 'submit')
                $data[$key] = $value;
        }

        if ($id == 0) {
            return $this->db->insert('prax_has_firma', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('prax_has_firma', $data);
        }
    }


    function form_insert($data){
        $this->db->insert('prax_has_firma', $data);
    }

    function delete_Prax_firma_id($id){
        $this->db->where('ID', $id);
        $this->db->delete('prax_has_firma');
    }
    function show_Prax_firma(){
        $query = $this->db->get('prax_has_firma');
        $query_result = $query->result();
        return $query_result;
    }

    function show_Prax_firma_id($data){
        $this->db->select('*');
        $this->db->from('prax_has_firma');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    function update_Prax_firma_id1($id,$data){
        $this->db->where('ID', $id);
        $this->db->update('prax_has_firma', $data);
    }

}