	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Rule extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['rule'] = $this->db->get('rule');
			$d['kd'] = $this->db->query('select id_rule from rule   group by id_rule asc ');
			$d['diagnosa'] = $this->db->get('diagnosa');
			$this->load->view('admin/templat/header');
			$this->load->view('admin/rule/home', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
		public function tambah()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['keterangan']= 'Tambah Rule';
			$d['ket'] = "";
			$d['id_diagnosa']="";
			$d['st']='tambah';
			$d['diagnosa'] = $this->db->get('diagnosa');
			
			$this->load->view('admin/templat/header');
			$this->load->view('admin/rule/tambah', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	public function simpan()
	{
		
		$t =  $this->input->post('t');
		$kode =  $this->input->post('kode');
for($i = 1; $i <= $t; $i++)
                  { 
					$in['id_rule'] = $this->input->post('kode');
					$in['id_gejala'] = $_POST['diagnosa'.$i];
					$in['aksi'] = $_POST['aksi'.$i];
					$this->db->insert('rule', $in);
                     }
echo '<script>window.alert("SUKSES NAMBAH RULE");window.location.href="../rule"</script>';
   
	


}
	}
	
	
	
			/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/
	?>