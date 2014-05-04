	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['diagnosa'] = $this->db->get('diagnosa');
			$this->load->view('admin/templat/header');
				$this->load->view('admin/diagnosa/index', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
		public function diagnosa()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['diagnosa'] = $this->db->get('diagnosa');
			$this->load->view('admin/templat/header');
			$this->load->view('admin/diagnosa/index', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}	
	
	public function tambah_diagnosa()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['keterangan']= 'Tambah Diagnosa';
			$d['ket'] = "";
			$d['id_diagnosa']="";
			$d['st']='tambah';
			$this->load->view('admin/templat/header');
			$this->load->view('admin/diagnosa/input', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	public function edit_diagnosa()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id['id_diagnosa'] = $this->uri->segment(3);
			$q = $this->db->get_where("diagnosa",$id);
			$d = array();
			foreach($q->result() as $dt)
			{
			
				$d['id_diagnosa'] = $dt->id_diagnosa;
				$d['ket'] = $dt->ket;
			}
			$d['st'] = "edit";
			$d['keterangan']= 'Edit Data Diagnosa';
			$this->load->view('admin/templat/header');
			$this->load->view('admin/diagnosa/input', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	public function simpan_diagnosa()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$this->form_validation->set_rules('ket', 'kontrak', 'trim|required');
			$id['id_diagnosa'] = $this->input->post("id_diagnosa");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("diagnosa",$id);
					$d = array();
					foreach($q->result() as $dt)
					{
						$d['id_diagnosa'] = $dt->id_diagnosa;
				$d['ket'] = $dt->ket;
													
					}
					$d['st'] = $st;
					$this->load->view('admin/diagnosa/input',$d);
				}
				else if($st=="tambah")
				{
					$d['id_diagnosa'] = "";
$d['ket'] = "";
$d['st'] = "tambah";

					$this->load->view('admin/templat/header');
					$this->load->view('admin/diagnosa/input',$d);
					$this->load->view('admin/templat/footer');

				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
				$upd['ket'] = $this->input->post("ket");
				$this->db->update("diagnosa",$upd,$id);
					?>
<script type="text/javascript">alert("SUKSES UPDATE DATA");window.location.href="<?= base_url();?>admin/diagnosa"; </script>	

					<?php
				}
				else if($st=="tambah")
				{
$in['ket'] = $this->input->post("ket");
			$this->db->insert("diagnosa",$in);
					?>
<script type="text/javascript">alert("SUKSES TAMBAH DATA");window.location.href="<?= base_url();?>admin/diagnosa"; </script>	
					<?php
				}
			
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function saran()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['pesan'] = $this->db->get('pesan');
			$this->load->view('admin/templat/header');
			$this->load->view('admin/saran/index', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	public function pasien()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['pasien'] = $this->db->get('pasien');
			$this->load->view('admin/templat/header');
			$this->load->view('admin/pasien/index', $d);
			$this->load->view('admin/templat/footer');

		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	}
		
		
		
		

		
		/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/
	?>
	
