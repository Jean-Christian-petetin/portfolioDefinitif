<?php

class Portfolio extends CI_Controller{
    
    public function accueil() {
        $this->load->helper('url');
        $this->load->view('accueil');
//        $this->load->view('sections/presentation');
//        $this->load->view('sections/skills');
//        $this->load->view('sections/travaux');
//        $this->load->view('sections/contact');
    }
}
