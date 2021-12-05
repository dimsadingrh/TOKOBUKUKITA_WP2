<?php

class ModelKategori extends CI_Model{
    public function data_antropologi(){
        return $this->db->get_where("buku",array('kategori' => 'antropologi'));
    }

    public function data_astronomi(){
        return $this->db->get_where("buku",array('kategori' => 'astronomi'));
    }

    public function data_biografi(){
        return $this->db->get_where("buku",array('kategori' => 'biografi'));
    }

    public function data_bisnis(){
        return $this->db->get_where("buku",array('kategori' => 'bisnis'));
    }

    public function data_ekonomi(){
        return $this->db->get_where("buku",array('kategori' => 'ekonomi'));
    }

    public function data_etika(){
        return $this->db->get_where("buku",array('kategori' => 'etika'));
    }

    public function data_filsafat(){
        return $this->db->get_where("buku",array('kategori' => 'filsafat'));
    }

    public function data_komputer(){
        return $this->db->get_where("buku",array('kategori' => 'komputer'));
    }

    public function data_masak(){
        return $this->db->get_where("buku",array('kategori' => 'masak'));
    }

    public function data_medis(){
        return $this->db->get_where("buku",array('kategori' => 'medis'));
    }

    public function data_musik(){
        return $this->db->get_where("buku",array('kategori' => 'musik'));
    }

    public function data_pemasaran(){
        return $this->db->get_where("buku",array('kategori' => 'pemasaran'));
    }
}
