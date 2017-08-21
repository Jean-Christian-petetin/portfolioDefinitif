<?php

class Portfolio extends CI_Controller {

    public function accueil() {
        $this->load->model('PresentationModel');
        $this->load->model('SkillsModel');
        $this->load->model('TravauxModel');
        $this->load->model('ContactModel');
        $this->load->helper('url');

        $data['presentation'] = $this->PresentationModel->getAll()[0];
        $data['skills'] = $this->SkillsModel->getAll();
        $data['travaux'] = $this->TravauxModel->getTitre()[0];
        $data['projets'] = $this->TravauxModel->getAll();
        $data['infoProjet'] = $this->TravauxModel->getAllInformations();
        $data['contact'] = $this->ContactModel->getAll()[0];

        $this->load->view('accueil', $data);
    }

}
