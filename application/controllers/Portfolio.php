<?php

class Portfolio extends CI_Controller{
    
    public function accueil() {
        $this->load->helper('url');
        $this->load->view('accueil');
    }
}
