<?php
class TravauxModel extends CI_Model {
    
    public function getTitre() {
        $getAll = $this->db->query('SELECT jc_travauxTitre FROM jc_travaux_test');
        return $getAll->result_array();
    }
    public function getAll() {
        $getAll = $this->db->query('SELECT * FROM jc_travaux');
        return $getAll->result_array();
    }
    public function getAllInformations() {
        $getAll = $this->db->query('SELECT jc_nomProjet, jc_lienProjet FROM jc_travaux');
        return $getAll->result_array();
    }
    
    public function get($id) {
        
    }
    public function add($objet) {
        
    }
    public function update($objet) {
        
    }
    public function delete($id) {
        
    }
}
