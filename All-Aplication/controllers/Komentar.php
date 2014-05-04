	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Komentar extends CI_Controller {
	public function index()
	{
			$d['keterangan']= 'Kritik dan Saran';
			$d['diagnosa'] = $this->db->get('diagnosa');
			$this->load->view('pasien/templat/header');
			$this->load->view('pasien/komentar/index', $d);
			$this->load->view('pasien/templat/footer');

		}

	public function simpan()
	{

		$in['nama'] = $this->input->post('nama', TRUE);
		$in['email'] = $this->input->post('email', TRUE);
		$in['pesan'] = $this->input->post('pesan', TRUE);
		$in['waktu'] = date('d-m-Y H:i:s');
		$in['ip'] = $_SERVER['REMOTE_ADDR']; 
		$this->db->insert('pesan', $in);
		?>
<script type="text/javascript">alert("TERIMA KASIH SUDAH MEMBERIKAN KRITIK/SARAN");window.location.href="<?= base_url();?>"; </script>	

					<?php
	
	}
	}
	
			/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/
	?>