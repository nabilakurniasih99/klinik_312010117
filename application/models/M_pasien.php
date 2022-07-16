<?php
//Model, pengelolaan db utk mengelola tb user
class M_pasien extends CI_Model{

    //fungsi2 yg di gunakan pada controler
    function tampil_data(){
        return $this->db->get('pasien');
    }

    function insert_data($data){
        return $this->db->insert('pasien', $data);
    }

    function edit_data($where){
        return $this->db->get_where('pasien', $where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('pasien', $data);
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('pasien');
    }

}