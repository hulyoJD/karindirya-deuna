<?php

class Pages extends CI_Controller {

    public function view(){
        $page = "home";
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = "New Posts";
        $data['blogs'] = $this->tutorialdb_model->get_tutorialdb();

     // print_r($data['document']);

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');


    }



}