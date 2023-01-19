<?php
class Model_kategori extends CI_Model{
    public function data_elektronik(){
        return $this->db->get_where("tb_barang",array('kategori' => 'barang elektronik'));
    }

    public function data_perlengkapan_rumah_tangga(){
        return $this->db->get_where("tb_barang",array('kategori' => 'perlengkapan rumah tangga'));
    }

    public function data_perlengkapan_dapur(){
        return $this->db->get_where("tb_barang",array('kategori' => 'perlengkapan dapur'));
    }
}
?>