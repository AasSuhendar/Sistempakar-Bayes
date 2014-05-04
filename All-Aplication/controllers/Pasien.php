	<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Pasien extends CI_Controller {
	public function index()
	{
	
			$d['ket'] = "";
			$d['id_diagnosa']="";
			$d['st']='tambah';
			$d['keterangan'] = 'KONSULTASI';
			$d['diagnosa'] = $this->db->query("SELECT * FROM diagnosa WHERE not id_diagnosa='025' order by id_diagnosa asc");
			$this->load->view('pasien/templat/header');
			$this->load->view('pasien/pasien/index', $d);
			$this->load->view('pasien/templat/footer');
	}
	
	public function simpan()
	{

					$t =  $this->input->post('t');
					$id =  $this->input->post('id');
					$tgl = $this->input->post('umur');
					$ps['id_pasien'] = $id;
					$ps['nama'] = $this->input->post('nama');
					$ps['umur'] =umur($tgl);
					$ps['jk'] = $this->input->post('jk');	
					$ps['telp'] = $this->input->post('telp');
					$ps['email'] = $this->input->post('email');
				$this->db->insert('pasien', $ps);
					$this->load->model('Rule_model','rule');
		$kode =  $this->input->post('kode');
for($i = 1; $i <= $t; $i++)
                  { 
					$in['id_rule'] = $this->input->post('kode');
				//	$in['id_gejala'] = $_POST['diagnosa'.$i];
				$id_gejala = $_POST['diagnosa'.$i];
					//$in['aksi'] = $_POST['aksi'.$i];
					$aksi = $_POST['aksi'.$i];
					$a=$this->rule->hasil($aksi); 
					$b=$this->rule->hasil2($id_gejala,$aksi); 
					$jumlah = $this->rule->jumlah(); 
					$x = $a / $jumlah;
					$y = $b/$a;
					$ks['id_pasien'] = $id;
					$ks['id_diagnosa'] =$id_gejala;
					$ks['aksi'] = $aksi;
					$ks['nilai'] = number_format($x * $y, 3);
					$this->db->insert('konsultasi', $ks);
                     }
					?>
<script type="text/javascript">alert("SUKSES");window.location.href="<?= base_url();?>pasien/hasil/<?= $id; ?>"; </script>	

					<?
  	}
	public function hasil()
	{
			$id= $this->uri->segment(3);
			$idx['id_pasien']= $this->uri->segment(3);
			$this->load->model('Rule_model','rule');
			$d['data']=$this->rule->data($id); 
			$d['plus'] =number_format($this->rule->sum_plus($id),3); 
			$d['min'] =number_format($this->rule->sum_min($id),3); 
			$d['hasil'] = $this->db->get_where('konsultasi', $idx);
			$this->load->view('pasien/templat/header');
			$this->load->view('pasien/pasien/hasil', $d);
			$this->load->view('pasien/templat/footer');
	}
	}
	
			/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/
	?>