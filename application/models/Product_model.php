<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $judul;
    public $penulis;
    public $tanggal;
    public $jml_halaman;
    public $jenis_buku;
    public $image = "default.jpg";

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'penulis',
            'label' => 'Penulis',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'date'],

            ['field' => 'jml_halaman',
            'label' => 'Jumlah Halaman',
            'rules' => 'numeric'],

            ['field' => 'jenis_buku',
            'label' => 'Jenis Buku',
            'rules' => 'required'],
           
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->judul = $post["judul"];
        $this->penulis = $post["penulis"];
        $this->tanggal= $post["tanggal"];
        $this->jml_halaman= $post["jml_halaman"];
        $this->jenis_buku= $post["jenis_buku"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->judul = $post["judul"];
        $this->penulis = $post["penulis"];
        $this->tanggal= $post["tanggal"];
        $this->jml_halaman= $post["jml_halaman"];
        $this->jenis_buku= $post["jenis_buku"];
        $this->db->update($this->_table, $this, array("product_id" => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}
