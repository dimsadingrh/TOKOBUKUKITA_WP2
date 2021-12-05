<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('index.php/autentifikasi/login');
        }

    }

    public function tambah_ke_keranjang($id_buku)
    {
        $buku = $this->ModelBuku->find($id_buku);

        $data = array(
            'id' => $buku->id_buku,
            'qty' => 1,
            'price' => $buku->harga,
            'name' => $buku->judul_buku
        );

        $this->cart->insert($data);
        redirect('index.php/selamatdatang');

    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('index.php/selamatdatang');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->ModelPesanan->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
    }

    public function detail($id_buku)
    {
        $data['buku'] = $this->ModelBuku->detail_buku($id_buku);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detailbuku', $data);
        $this->load->view('templates/footer');
    }
}