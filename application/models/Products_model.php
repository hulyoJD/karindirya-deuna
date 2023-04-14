<?php
class Products_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAllProducts()
    {
        $query = $this->db->get('tblproducts');
        $result = $query->result();
        return $result;
    }
}
