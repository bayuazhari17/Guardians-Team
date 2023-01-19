<?php 
class Kategori extends CI_Controller{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function perlengkapan_rumah_tangga()
    {
        $data['perlengkapan_rumah_tangga'] = $this->model_kategori->data_perlengkapan_rumah_tangga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perlengkapan_rumah_tangga', $data);
        $this->load->view('templates/footer');
    }

    public function perlengkapan_dapur()
    {
        $data['perlengkapan_dapur'] = $this->model_kategori->data_perlengkapan_dapur()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perlengkapan_dapur', $data);
        $this->load->view('templates/footer');
    }
}
?>