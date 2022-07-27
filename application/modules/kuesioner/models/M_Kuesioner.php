<?php 
class M_Kuesioner extends CI_Model
{
     public function get_kuesioner($where, $tabel)
     {
          if (!empty($where)) {
               $this->db->where($where);
           }
           $data = $this->db->get($tabel)->result();
           return (count((array)$data) > 0) ? $data : false;
     }

     public function insert($data, $tabel)
    {
        return ($this->db->insert($tabel, $data)) ? true : false;
    }

    public function get_soal($where) 
    {
            $this->db->select('daftar_soal.*,responden.id_identitas,paket_soal.id_paket');
            $this->db->from('daftar_soal');
            $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id','paket_soal.nama_paket','daftar_soal.soal','daftar_soal.id_soal');
            $this->db->join('responden', 'paket_soal.id_paket = responden.paket_id_responden');
            $this->db->where($where);
            $this->db->order_by('id_soal', 'asc');
            // if (!empty($where)) {
            //     $this->db->where("paket_soal.nama_paket",$where);
            // }
            $query = $this->db->get()->result();
            return $query;
    }
}