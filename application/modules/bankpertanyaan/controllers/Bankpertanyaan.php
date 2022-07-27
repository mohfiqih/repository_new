<?php defined('BASEPATH') or exit('No direct script access allowed');

class Bankpertanyaan extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('M_bank', 'banksoal');
		// $this->load->library('session');
		// $this->load->helper('url');
	}

	// ============================ FORM PAKET SOAL ==================================== //

	public function meta()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Paket Kuesioner",
			"halaman"			=> "folder_paket/paket_soal",
			"view"			=> "folder_paket/paket_soal",
			"jml_positif"		=> $this->M_Universal->total_positif("", "soal"),
			"jml_soal"		=> $this->M_Universal->total_paket("", "paket_soal"),
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user
		);

		return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	public function tambah_paket()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Tambah",
			"halaman"			=> "folder_paket/tambah_paket",
			"view"			=> "folder_paket/tambah_paket",
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function edit_paket()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Edit Paket",
			"halaman"			=> "folder_paket/edit_paket",
			"view"			=> "folder_paket/edit_paket",
			"edit_paket"		=>  $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function tambah()
	{
		$data = array(
			"nama_paket"			=> $this->input->post("nama_paket"),
			"aplikasi"			=> $this->input->post("aplikasi"),
			"versi_apl_paket"		=> $this->input->post("versi_apl_paket"),
			"tgl_kuesioner"		=> $this->input->post("tgl_kuesioner"),
			"responden"			=> implode(',', $this->input->post("responden")),
			"jumlah_soal"			=> $this->input->post("jumlah_soal"),
		);

		$tambah = $this->M_Universal->insert($data, "paket_soal");

		if ($tambah) {
			notifikasi_redirect("success", "Berhasil Menambah Paket Soal", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal Menambah Paket Soal", uri(1));
		};
	}

	public function update_paket()
	{
		$id_paket	= dekrip($this->input->post("id_paket"));
		$data	= array(
			"nama_paket"			=> $this->input->post("nama_paket"),
			"aplikasi"			=> $this->input->post("aplikasi"),
			"versi_apl_paket"		=> $this->input->post("versi_apl_paket"),
			"tgl_kuesioner"		=> $this->input->post("tgl_kuesioner"),
			"responden"			=> implode(',', $this->input->post("responden")),
			"jumlah_soal"			=> $this->input->post("jumlah_soal"),
		);

		$update = $this->M_Universal->update($data, ["id_paket" => $id_paket], "paket_soal");

		if ($update) {
			notifikasi_redirect("success", "Paket Soal Berhasil di Update", uri(1));
		} else {
			notifikasi_redirect("error", "Paket Soal Gagal di Update", uri(1));
		};
	}

	public function hapus_paket()
	{
		$hapus = $this->M_Universal->delete(["id_paket" => dekrip(uri(3))], "paket_soal");

		if ($hapus) {
			notifikasi_redirect("success", "Paket Soal Berhasil di Hapus", uri(1));
		} else {
			notifikasi_redirect("error", "Paket Soal Gagal di Hapus", uri(1));
		};
	}

	// ============================ END PAKET ==================================== //


	// ============================ TAMBAH SOAL ==================================== //

	public function evaluasi_pertanyaan()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Daftar Pertanyaan",
			"halaman"			=> "folder_pertanyaan/evaluasi_soal",
			"view"			=> "folder_pertanyaan/evaluasi_soal",
			"jml_soal"		=> $this->banksoal->total_soal_paket(NULL, "daftar_soal.paket_id"),
			"data_soal"		=> $this->banksoal->get_soal(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function soal_positif()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Tambah Pertanyaan Positif",
			"halaman"			=> "folder_pertanyaan/tambah_soal_positif",
			"view"			=> "folder_pertanyaan/tambah_soal_positif",
			"data_paket"		=> $this->banksoal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function soal_negatif()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Tambah Pertanyaan Negatif",
			"halaman"			=> "folder_pertanyaan/tambah_soal_negatif",
			"view"			=> "folder_pertanyaan/tambah_soal_negatif",
			"data_paket"		=> $this->banksoal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function kategori_soal()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Kategori Pertanyaan",
			"halaman"			=> "folder_pertanyaan/kategori_soal",
			"view"			=> "folder_pertanyaan/kategori_soal",
			"data_paket"		=> $this->banksoal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function tambah_soal_positif()
	{
		$data = array(
			"paket_id"			=> $this->input->post("paket_id"),
			"soal"				=> $this->input->post("soal"),
			"kategori_soal"		=> $this->input->post("kategori_soal"),
			"sangat_setuju"		=> $this->input->post("sangat_setuju"),
			"setuju"				=> $this->input->post("setuju"),
			"cukup"				=> $this->input->post("cukup"),
			"tidak_setuju"			=> $this->input->post("tidak_setuju"),
			"sangat_tidaksetuju"	=> $this->input->post("sangat_tidaksetuju"),
		);

		// var_dump($data);die;
		$tambah 	= $this->M_Universal->insert($data, "daftar_soal");

		if ($tambah) {
			notifikasi_redirect("success", "Berhasil Menambah Soal", redirect(base_url('bankpertanyaan/evaluasi_pertanyaan/') . uri(3)));
		} else {
			notifikasi_redirect("error", "Gagal Menambah Soal", redirect(uri(1)));
		};
	}

	public function tambah_soal_negatif()
	{
		$data = array(
			"paket_id"			=> $this->input->post("paket_id"),
			"soal"				=> $this->input->post("soal"),
			"kategori_soal"		=> $this->input->post("kategori_soal"),
			"sangat_setuju"		=> $this->input->post("sangat_setuju"),
			"setuju"				=> $this->input->post("setuju"),
			"cukup"				=> $this->input->post("cukup"),
			"tidak_setuju"			=> $this->input->post("tidak_setuju"),
			"sangat_tidaksetuju"	=> $this->input->post("sangat_tidaksetuju"),
		);

		// var_dump($data);die;
		$tambah 	= $this->M_Universal->insert($data, "daftar_soal");

		if ($tambah) {
			notifikasi_redirect("success", "Berhasil Menambah Soal", redirect(base_url('bankpertanyaan/evaluasi_pertanyaan') . uri(3)));
		} else {
			notifikasi_redirect("error", "Gagal Menambah Soal", redirect(uri(1)));
		};
	}

	public function edit_soal_positif()
	{
		$data_user = $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Edit Pertanyaan Positif",
			"halaman"			=> "folder_pertanyaan/edit_soal_positif",
			"view"			=> "folder_pertanyaan/edit_soal_positif",
			"edit_soal"		=> $this->M_Universal->getMulti(["id_soal" => dekrip(uri(3))], "daftar_soal"),
			"data_paket"		=> $this->banksoal->getMulti(NULL, "paket_soal"),
			"paket"			=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
	}

	public function update_soal()
	{
		$id_soal	= dekrip($this->input->post("id_soal"));
		$data	= array(
			"paket_id"			=> $this->input->post("paket_id"),
			"soal"				=> $this->input->post("soal"),
			"kategori_soal"		=> $this->input->post("kategori_soal"),
			"sangat_setuju"		=> $this->input->post("sangat_setuju"),
			"setuju"				=> $this->input->post("setuju"),
			"cukup"				=> $this->input->post("cukup"),
			"tidak_setuju"			=> $this->input->post("tidak_setuju"),
			"sangat_tidaksetuju"	=> $this->input->post("sangat_tidaksetuju"),
		);

		$update = $this->M_Universal->update($data, ["id_soal" => $id_soal], "daftar_soal");

		if ($update) {
			notifikasi_redirect("success", "Berhasil Update Soal", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal Update Soal", uri(1));
		};
	}

	public function hapus_soal()
	{
		$hapus 	= $this->M_Universal->delete(["id_soal" => dekrip(uri(3))], "daftar_soal");

		if ($hapus) {
			notifikasi_redirect("success", "Berhasil Hapus Soal", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal Hapus Soal", uri(1));
		};
	}

	// ============================ END SOAL ==================================== //

	// ============================ KUESIONER ==================================== //

	public function data_responden()
	{
		$data_user		= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden	= "paket_id_responden='" . dekrip(uri(3)) . "' ";
		$total_soal		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data = array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "folder_hasil_kuesioner/data_responden",
			"view"			=> "folder_hasil_kuesioner/data_responden",
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			// Menarik Data identitas responden berdasarkan id_paket 
			"data_kuesioner"	=> $this->M_Universal->getMulti(["id_identitas" => dekrip(uri(3))], "jawaban"),
			"data_identitas"	=> $this->banksoal->get_jawaban(["responden.paket_id_responden" => dekrip(uri(3))]),

			// Menghitung total Responden yg Menjawab berdasarkan id_paket
			"total_responden"	=> $this->banksoal->total_responden($total_responden),

			// Menghitung total Jumlah Jawaban dari responden berdasarkkan id_paket
			"total_soal"		=> $this->banksoal->total_soal($total_soal),

			// Menghitung Nilai Tertinggi, Terendah dan Interval
			"total"			=> (($this->banksoal->total_ss_p($total_id) + $this->banksoal->total_ss_n($total_id))*5)+(($this->banksoal->total_s_p($total_id) + $this->banksoal->total_s_n($total_id))*4)+(($this->banksoal->total_c_p($total_id) + $this->banksoal->total_c_n($total_id))*3)+(($this->banksoal->total_ts_p($total_id) + $this->banksoal->total_ts_n($total_id))*2)+(($this->banksoal->total_sts_p($total_id) + $this->banksoal->total_sts_n($total_id))*1),
			
			"interval"		=> $this->banksoal->total_responden($total_responden)/5,
			"terendah"		=> $this->banksoal->total_responden($total_responden)*1,
			"tertinggi"		=> $this->banksoal->total_soal($total_soal)*5,
			
			// Menghitung Skor Total Positif + Negatif
			"ss"		=> ($this->banksoal->total_ss_p($total_id) + $this->banksoal->total_ss_n($total_id))*5,
			"s"		=> ($this->banksoal->total_s_p($total_id) + $this->banksoal->total_s_n($total_id))*4,
			"c"		=> ($this->banksoal->total_c_p($total_id) + $this->banksoal->total_c_n($total_id))*3,
			"ts"		=> ($this->banksoal->total_ts_p($total_id) + $this->banksoal->total_ts_n($total_id))*2,
			"sts"	=> ($this->banksoal->total_sts_p($total_id) + $this->banksoal->total_sts_n($total_id))*1,

			// Menghitung Skor Positif
			"ss_positif"		=> $this->banksoal->total_ss_p($total_id),
			"s_positif"		=> $this->banksoal->total_s_p($total_id),
			"c_positif"		=> $this->banksoal->total_c_p($total_id),
			"ts_positif"		=> $this->banksoal->total_ts_p($total_id),
			"sts_positif"		=> $this->banksoal->total_sts_p($total_id),
			
			// Menghitung Skor Negatif
			"ss_negatif"		=> $this->banksoal->total_ss_n($total_id),
			"s_negatif"		=> $this->banksoal->total_s_n($total_id),
			"c_negatif"		=> $this->banksoal->total_c_n($total_id),
			"ts_negatif"		=> $this->banksoal->total_ts_n($total_id),
			"sts_negatif"		=> $this->banksoal->total_sts_n($total_id),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
		// var_dump($total_ss_p);
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_identitas" => dekrip(uri(3))], "responden");

		if ($hapus) {
			notifikasi_redirect("success", "Hapus data berhasil", redirect('banksoal/kuesioner/'));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", uri(1));
		};
	}

	public function lihat_responden()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"				=> "Detail Data",
			"halaman"				=> "folder_hasil_kuesioner/lihat_responden",
			"view"				=> "folder_hasil_kuesioner/lihat_responden",
			"data_identitas"		=> $this->banksoal->getMulti_jawaban(["id_identitas" => dekrip(uri(3))], "responden"),
			"data_kuesioner"		=> $this->banksoal->get_soal_jawaban([
				"jawaban.id_identitas" 	=> dekrip(uri(3)),
				"id_paket_jawaban"		=> dekrip(uri(4))
			]),
			"user"				=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function kuesioner()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"				=> "Hasil Kuesioner",
			"halaman"				=> "folder_hasil_kuesioner/hasil_kuesioner",
			"view"				=> "folder_hasil_kuesioner/hasil_kuesioner",
			"data_paket"			=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"				=> $data_user
		);
		$this->load->view('template', $data);
	}

	// ============================ END KUESIONER ==================================== //

	// EXPORT //
	public function laporan_paket()
	{
		$data	= array(
			"judul"			=> "Paket Pertanyaan",
			"halaman"			=> "paket_soal",
			"view"			=> "paket_soal",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			// "user"			=> $data_user
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-paket.pdf";
		 $this->pdf->load_view('folder_paket/export_paket', $data);
	}

	public function laporan_daftar_pertanyaan()
	{
		$data	= array(
			"judul"			=> "Paket Pertanyaan",
			"halaman"			=> "paket_soal",
			"view"			=> "paket_soal",
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"data_soal"		=> $this->banksoal->get_soal(["daftar_soal.paket_id" => dekrip(uri(3))]),
			// "user"			=> $data_user
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-daftar-pertanyaan.pdf";
		 $this->pdf->load_view('folder_pertanyaan/export_pertanyaan', $data);
	}
	
	public function hasil_kuesioner_pdf()
	{
		$total_responden	= "paket_id_responden='" . dekrip(uri(3)) . "' ";
		$total_soal		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data = array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"			=> "data_responden",
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			// Menarik Data identitas responden berdasarkan id_paket 
			"data_kuesioner"	=> $this->M_Universal->getMulti(["id_identitas" => dekrip(uri(3))], "jawaban"),
			"data_identitas"	=> $this->banksoal->get_jawaban(["responden.paket_id_responden" => dekrip(uri(3))]),

			// Menghitung total Responden yg Menjawab berdasarkan id_paket
			"total_responden"	=> $this->banksoal->total_responden($total_responden),

			// Menghitung total Jumlah Jawaban dari responden berdasarkkan id_paket
			"total_soal"		=> $this->banksoal->total_soal($total_soal),

			// Menghitung Nilai Tertinggi, Terendah dan Interval
			"total"			=> (($this->banksoal->total_ss_p($total_id) + $this->banksoal->total_ss_n($total_id))*5)+(($this->banksoal->total_s_p($total_id) + $this->banksoal->total_s_n($total_id))*4)+(($this->banksoal->total_c_p($total_id) + $this->banksoal->total_c_n($total_id))*3)+(($this->banksoal->total_ts_p($total_id) + $this->banksoal->total_ts_n($total_id))*2)+(($this->banksoal->total_sts_p($total_id) + $this->banksoal->total_sts_n($total_id))*1),
			"interval"		=> $this->banksoal->total_responden($total_responden)/5,
			"terendah"		=> $this->banksoal->total_responden($total_responden)*1,
			"tertinggi"		=> $this->banksoal->total_soal($total_soal)*5,
			
			// Menghitung Skor Total Positif + Negatif
			"ss"		=> ($this->banksoal->total_ss_p($total_id) + $this->banksoal->total_ss_n($total_id))*5,
			"s"		=> ($this->banksoal->total_s_p($total_id) + $this->banksoal->total_s_n($total_id))*4,
			"c"		=> ($this->banksoal->total_c_p($total_id) + $this->banksoal->total_c_n($total_id))*3,
			"ts"		=> ($this->banksoal->total_ts_p($total_id) + $this->banksoal->total_ts_n($total_id))*2,
			"sts"	=> ($this->banksoal->total_sts_p($total_id) + $this->banksoal->total_sts_n($total_id))*1,

			// Menghitung Skor Positif
			"ss_positif"		=> $this->banksoal->total_ss_p($total_id),
			"s_positif"		=> $this->banksoal->total_s_p($total_id),
			"c_positif"		=> $this->banksoal->total_c_p($total_id),
			"ts_positif"		=> $this->banksoal->total_ts_p($total_id),
			"sts_positif"		=> $this->banksoal->total_sts_p($total_id),
			
			// Menghitung Skor Negatif
			"ss_negatif"		=> $this->banksoal->total_ss_n($total_id),
			"s_negatif"		=> $this->banksoal->total_s_n($total_id),
			"c_negatif"		=> $this->banksoal->total_c_n($total_id),
			"ts_negatif"		=> $this->banksoal->total_ts_n($total_id),
			"sts_negatif"		=> $this->banksoal->total_sts_n($total_id),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-hasil-kuesioner.pdf";
		 $this->pdf->load_view('folder_hasil_kuesioner/export_hasil_kuesioner', $data);
	}	
}