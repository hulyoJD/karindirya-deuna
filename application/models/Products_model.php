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
    public function saveProduct($data){
        //saves the product into the database
        $this->db->insert('tblproducts', $data);
    }
}
