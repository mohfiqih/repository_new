<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_dasbor');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");

        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "dasboard",
			
			// Jumlah Data Setiap Card Menu
			"jml_user"		=> $this->M_dasbor->total_user("", "user"),
			"jml_berkas"		=> $this->M_dasbor->total_berkas("", "manajerial"),
			"jml_apl"			=> $this->M_dasbor->total_aplikasi("", "manajerial"),
			"jml_responden"	=> $this->M_dasbor->total_respon_dashboard("", "responden"),
			"jml_paket"		=> $this->M_dasbor->total_paket(NULL, "paket_soal"),
			"jml_soal"		=> $this->M_dasbor->total_soal_dashboard(NULL, "daftar_soal"),
			"jml_soal_negatif"	=> $this->M_dasbor->total_soal_negatif(NULL, "daftar_soal"),
			"jml_soal_positif"	=> $this->M_dasbor->total_soal_positif(NULL, "daftar_soal"),
			// "total_pertanyaan"	=> 	

			// Grafik Pie & Total Responden Berdasarkan Kategori Responden
			"jml_dosen"		=> $this->M_dasbor->total_dosen(NULL, "responden"),
			"jml_mahasiswa"	=> $this->M_dasbor->total_mahasiswa(NULL, "responden"),
			"jml_karyawan"		=> $this->M_dasbor->total_karyawan(NULL, "responden"),
			"jml_staf"		=> $this->M_dasbor->total_staf(NULL, "responden"),
			"data_pie"		=> $this->M_dasbor->grafik_pie(NULL, "responden"),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			"data_pertanyaan"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			
			// "jml_dosen"		=> $this->M_dasbor->total_dosen(NULL, "responden"),
			// "data_pie"		=> $this->M_dasbor->grafik_pie(NULL, "responden"),
			// "data_pertanyaan"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}
}