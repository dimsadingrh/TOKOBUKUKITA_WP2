<?php

class Kategori extends CI_Controller{
    public function antropologi()
    {
        $data['antropologi'] = $this->ModelKategori->data_antropologi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('antropologi', $data);
        $this->load->view('templates/footer');
    }

    public function astronomi()
    {
        $data['astronomi'] = $this->ModelKategori->data_astronomi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('astronomi', $data);
        $this->load->view('templates/footer');
    }

    public function biografi()
    {
        $data['biografi'] = $this->ModelKategori->data_biografi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('biografi', $data);
        $this->load->view('templates/footer');
    }

    public function bisnis()
    {
        $data['bisnis'] = $this->ModelKategori->data_bisnis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bisnis', $data);
        $this->load->view('templates/footer');
    }

    public function ekonomi()
    {
        $data['ekonomi'] = $this->ModelKategori->data_ekonomi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ekonomi', $data);
        $this->load->view('templates/footer');
    }

    public function etika()
    {
        $data['etika'] = $this->ModelKategori->data_etika()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('etika', $data);
        $this->load->view('templates/footer');
    }

    public function filsafat()
    {
        $data['filsafat'] = $this->ModelKategori->data_filsafat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('filsafat', $data);
        $this->load->view('templates/footer');
    }

    public function komputer()
    {
        $data['komputer'] = $this->ModelKategori->data_komputer()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('komputer', $data);
        $this->load->view('templates/footer');
    }

    public function masak()
    {
        $data['masak'] = $this->ModelKategori->data_masak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('masak', $data);
        $this->load->view('templates/footer');
    }

    public function medis()
    {
        $data['medis'] = $this->ModelKategori->data_medis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('medis', $data);
        $this->load->view('templates/footer');
    }

    public function musik()
    {
        $data['musik'] = $this->ModelKategori->data_musik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('musik', $data);
        $this->load->view('templates/footer');
    }

    public function pemasaran()
    {
        $data['pemasaran'] = $this->ModelKategori->data_pemasaran()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pemasaran', $data);
        $this->load->view('templates/footer');
    }
}