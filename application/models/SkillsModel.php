<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SkillsModel
 *
 * @author jc
 */
class SkillsModel extends CI_Model {
    
    public function getAll() {
        $getAll = $this->db->query('SELECT * FROM jc_skills');
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
