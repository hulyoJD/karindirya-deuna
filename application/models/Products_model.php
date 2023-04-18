<?php
class Products_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //loads the database when the model is loaded
        $this->load->database();
    }

    public function getAllProducts()
    {

        //get all the records
        $query = $this->db->get('tblproducts');
        $result = $query->result();
        return $result;
    }

    public function saveProduct($data)
    {
        //saves the product into the database
        $this->db->insert('tblproducts', $data);
    }

    public function getProduct($id)
    {
        //
        $this->load->database();
        //
        $query = $this->db->get_where('tblproducts', array('prod_id' => $id));
        //
        $product = $query->row();
        return $product;
    }

    public function editProduct($id, $data)
    {
        $this->load->database();
        $this->db->where('prod_id', $id);
        $this->db->update('tblproduct', $data);
    }

    public function deleteProduct($id)
    {
        $this->load->database();
        $this->db->where('prod_id', $id);
        $this->db->delete('tblproducts');
    }
}
