<?php

class tutorialdb_model extends CI_Model{

    public function __construct(){

        $this->load->database();

    }

    public function get_tutorialdb(){

        $query = $this->db->get('blogs');
        return $query->result_array();

    }

}