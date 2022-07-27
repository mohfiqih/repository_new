<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dasbor extends CI_Model
{
     function total_user()
     {
         return $this->db->get('user')->num_rows();
     }
     function total_respon_dashboard()
     {
         return $this->db->get('responden')->num_rows();
     }
     function total_berkas()
     {
         return $this->db->get('manajerial')->num_rows();
     }
     function total_aplikasi()
     {
         return $this->db->get('manajerial')->num_rows();
     }
     
     function total_paket()
     {
         return $this->db->get('paket_soal')->num_rows();
     }
     
     function total_soal_dashboard()
     {
         return $this->db->get('daftar_soal')->num_rows();
     }

     function total_soal_negatif()
     {
         $query  = $this->db->query('SELECT * FROM daftar_soal WHERE kategori_soal= "negatif"');
         $negatif      = $query->num_rows();
         return $negatif;
     }

     function total_soal_positif()
     {
         $query   = $this->db->query('SELECT * FROM daftar_soal WHERE kategori_soal= "positif"');
         $positif = $query->num_rows();
         return $positif;
     }

     function grafik_pie()
     {
        $sql = "SELECT sebagai, COUNT(*) AS Jumlah FROM responden GROUP BY sebagai ORDER BY sebagai";
        $hasil= $this->db->query($sql);
        if($hasil){
            return $hasil->result();
        }else{
            return 0;
        }
     }

     function grafik_batang()
     {
        $sql = "SELECT sebagai, COUNT(*) AS Jumlah FROM responden GROUP BY sebagai ORDER BY sebagai";
        $hasil= $this->db->query($sql);
        if($hasil){
            return $hasil->result();
        }else{
            return 0;
        }
     }

    //  function total_respon()
    //  {
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "dosen"');
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "mahasiswa"');
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "karyawan"');
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "staf"');
    //      $dosen = $query->num_rows();
    //      return $dosen;
    //  }
     
     function total_dosen()
     {
         $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "dosen"');
         $dosen = $query->num_rows();
         return $dosen;
     }

     function total_mahasiswa()
     {
         $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "mahasiswa"');
         $mahasiswa = $query->num_rows();
         return $mahasiswa;
     }

     function total_karyawan()
     {
         $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "karyawan"');
         $karyawan = $query->num_rows();
         return $karyawan;
     }

     function total_staf()
     {
         $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "staf"');
         $staf = $query->num_rows();
         return $staf;
     }

    //  SKORRR
    function total_responden($where)
    {
        $this->db->select('*');
        $this->db->from('responden');
        $this->db->join('paket_soal', 'paket_soal.id_paket = responden.paket_id_responden');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_soal($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // Skor Positif
    function total_ss_p($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Positif" and jawaban = "5"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_s_p($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Positif" and jawaban = "4"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_c_p($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Positif" and jawaban = "3"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_ts_p($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Positif" and jawaban = "2"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_sts_p($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Positif" and jawaban = "1"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // Skor Negatif
    function total_ss_n($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Negatif" and jawaban = "1"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_s_n($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Negatif" and jawaban = "2"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_c_n($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Negatif" and jawaban = "3"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_ts_n($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Negatif" and jawaban = "4"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_sts_n($where)
    {
        $this->db->select('*');
        $this->db->from('jawaban');
        $this->db->join('paket_soal', 'paket_soal.id_paket = jawaban.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('kategori_soal= "Negatif" and jawaban = "5"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }
}
?>