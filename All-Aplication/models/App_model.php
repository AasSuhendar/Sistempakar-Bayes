<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model {

	public function getLoginData($data)
	{
		$login['username'] = $data['username'];
		$login['password'] = md5($data['password']);
		$cek = $this->db->get_where('tbl_user_login', $login);
		if($cek->num_rows()>0)
		{
			foreach($cek->result() as $qad)
			{
				$sess_data['logged_in'] = 'yesGetMeLoginBaby';
				$sess_data['id_user'] = $qad->id;
				$sess_data['username'] = $qad->username;
				$sess_data['nama'] = $qad->nama;
				$sess_data['stts'] = $qad->stts; // session login sementara
				$this->session->set_userdata($sess_data);
			}
			header('location:'.base_url().'');
		}
		else
		{
			$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan tidak valid dengan database kami.");
			header('location:'.base_url().'');
		}
	}
	 function tambah_data($data){
        for($i = 1; $i <= $data; $i++){
                $dataarray = array(
                    'rule'=>$data[$i]['rule'],
					 'hasil'=>$data['hasil']
                );
 
                $this->db->insert('rule', $dataarray);
            }
    }
	
}

		/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/