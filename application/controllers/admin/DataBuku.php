<?php

class DataBuku extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('index.php/autentifikasi/login');
        }

    }
    
    public function index()
    {
        $data['buku'] = $this->ModelBuku->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/databuku', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $judul_buku = $this->input->post('judul_buku');
        $kategori = $this->input->post('kategori');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $image = $_FILES['image']['name'];
        if ($image = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('image')){
                echo "Gambar Gagal diUpload!";
            }else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul_buku' => $judul_buku,
            'kategori' => $kategori,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'stok' => $stok,
            'harga' => $harga,
            'image' => $image
        );

        $this->ModelBuku->tambah_buku($data, 'buku');
        redirect('index.php/admin/databuku/index');
    }

    public function edit($id_buku)
    {
        $where = array('id_buku' =>$id_buku);
        $data['buku'] = $this->ModelBuku->edit_buku($where, 'buku')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/editbuku', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id = $this->input->post('id_buku');
        $judul_buku = $this->input->post('judul_buku');
        $kategori = $this->input->post('kategori');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun_terbit = $this->input->post('tahun_terbit');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');

        $data = array(
            'judul_buku' => $judul_buku,
            'kategori' => $kategori,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'stok' => $stok,
            'harga' => $harga
        );

        $where = array(
            'id_buku' => $id
        );

        $this->ModelBuku->update_buku($where,$data, 'buku');
        redirect('index.php/admin/databuku/index');
    }

    public function hapus ($id_buku)
    {
        $where = array('id_buku' => $id_buku);
        $this->ModelBuku->hapus_buku($where, 'buku');
        redirect('index.php/admin/databuku/index');
    }
}