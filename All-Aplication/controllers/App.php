<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class App extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')=="")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('app/login',$d);
			}
			else
			{
				$dt['username'] = $this->input->post('username');
				$dt['password'] = $this->input->post('password');
				$this->App_model->getLoginData($dt);
			}
		}
		else if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			header('location:'.base_url().'Admin');
		}
				
	}
	
	
	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}

		/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/