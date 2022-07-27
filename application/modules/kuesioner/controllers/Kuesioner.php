<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends MY_Controller
{

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
		// $this->load->model('M_Kuesioner');
	}

	/**
	 * [index description]
	 *
	 * @method index
	 *
	 * @return [type] [description]
	 */

	public function index()
	{
		$data = array(
			"judul"		=> "Halaman Kuesioner",
			"halaman"		=> "identitas",
			"view"		=> "identitas",
			"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
		);

		$this->load->view('form_identitas', $data);
	}

	public function tambah()
	{
		$id =  $this->input->post("id_identitas");
		$data = array(
			"id_identitas"			=> $this->input->post("id_identitas"),
			"paket_id_responden"	=> dekrip(uri(3)),
			"nama_lengkap"			=> $this->input->post("nama_lengkap"),
			"sebagai"				=> $this->input->post("sebagai"),
			"gender"				=> $this->input->post("gender"),
		);

		$tambah = $this->M_Universal->insert($data, "responden");
		if ($tambah) {
			redirect(base_url('kuesioner/soal/'). uri(3).'?id='.$id);
			
		}
	}

	public function soal()
	{
		$id= $this->input->get('id');
		$data = array(
			"judul"		=> "Halaman Kuesioner",
			"halaman"		=> "soal",
			"view"		=> "soal",
			"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3)),"id_identitas" => $id]),
			"data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
		);

		$this->load->view('soal', $data);
	}

	public function tambah_soal()
	{
		$this->db->order_by('id_soal', 'asc');
		$id_soal 		= $this->db->get_where('daftar_soal', array('paket_id'=> $this->input->post("id_paket_jawaban")));
		$kategori_soal = $this->db->get_where('daftar_soal', array('kategori_soal'=> $this->input->post("kategori_soal")));
		$data= [];
		foreach ($id_soal->result() as $row) {
			$data[] = array(
				"id_respon"		=> $this->input->post("id_respon"),
				"id_identitas"		=> $this->input->post("id_identitas"),
				"id_paket_jawaban"	=> $this->input->post("id_paket_jawaban"),
				"id_soal_jawaban"	=> $row->id_soal,
				"kategori_soal"	=> $row->kategori_soal,
				"jawaban"			=> $this->input->post("jawaban" .$row->id_soal)
			);
		}
		// var_dump($data);

		$tambah = $this->db->insert_batch('jawaban', $data);

		if ($tambah) {
			notifikasi_redirect("success", "Hapus data berhasil", redirect('kuesioner/terimakasih'));
		} else {
			notifikasi_redirect("error", "Data sudah ada", redirect('kuesioner/soal'));
		};
	}

	public function terimakasih()
	{
		$data = array(
			"judul"			=> "Halaman Kuesioner",
			"halaman"			=> "end",
			"view"			=> "end",
			// "data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
		);

		$this->load->view('end', $data);
	}
}