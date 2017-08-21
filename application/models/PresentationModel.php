<?php

class PresentationModel extends CI_Model {
    
    public function __construct() {
        $this->load->helper('url');
        $this->load->database();
    }

//    public function getAll() {
//        $getAll = $this->db->query('SELECT * FROM jc_pres');
//        return $getAll->result_array();
//    }
    public function getAll() {
        $getAll = $this->db->query('SELECT jc_bienvenue, jc_metier, jc_nom, jc_textpres FROM jc_pres');
        return $getAll->result_array();
    }
    
    public function get($id) {
        $getOne = $this->db->query('SELECT * FROM jc_presentation WHERE id = $id');
        return $getOne->result_array();
    }
    
    public function add($objet) {
        $data = array(
            text => $this->input->post('text_presentation')
        );
        return $this->db->insert('text', $data);
    }
    
    public function update($objet) {
        
    }
    
    public function delete($id) {
        $deleteOne = $this->db->query('DELETE * FROM jc_presentation WHERE id = $id');
        return $deleteOne->result_array();
    }
    
}
