<?php
class ContactModel extends CI_Model {
    
    public function getAll() {
        $getAll = $this->db->query('SELECT jc_contactTitre, jc_contactLieu, jc_contactTel, jc_contactEmail, jc_contactLinkedin, jc_contactTwitter  FROM jc_contact');
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
