<?php

class ModelBuku extends CI_Model{
    public function tampil_data(){
        return $this->db->get('buku');
    }

    public function tambah_buku($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_buku($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    public function update_buku($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_buku($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id_buku)
    {
        $result = $this->db->where('id_buku', $id_buku)
                            ->limit(1)
                            ->get('buku');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_buku($id_buku)
    {
        $result = $this->db->where('id_buku', $id_buku)->get('buku');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

}