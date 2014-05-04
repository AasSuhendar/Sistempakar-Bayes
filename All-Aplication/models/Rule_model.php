<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rule_model extends CI_Model {

 function hasil($id)
 {
			$q = $this->db->query("SELECT count(*)as jumlah FROM hasil WHERE aksi='".$id."'");
			foreach($q->result() as $dt)
			{
$data= $dt->jumlah;
			}
	  
	  return $data;
 }
 
  function hasil2($gejala, $aksi)
 {
			$q = $this->db->query("SELECT count(*) as jumlah FROM hasil INNER JOIN rule ON rule.id_rule = hasil.id_rule AND rule.aksi = hasil.aksi where rule.id_gejala='".$gejala."' and rule.aksi='".$aksi."'");
			foreach($q->result() as $dt)
			{
$data= $dt->jumlah;
			}
	  
	  return $data;
 }
 function jumlah()
 {
			$q = $this->db->query("SELECT count(*) as jumlah FROM diagnosa");
			foreach($q->result() as $dt)
			{
$data= $dt->jumlah;
			}
	  
	  return $data;
 }
 
 	  function data($id)
 {
 			$d['id_pasien'] = $id;
 			$q = $this->db->get_where('pasien',$d);
			$d = array();
			foreach($q->result() as $dt)
			{
			$datax['nama']= $dt->nama;
			$datax['umur']= $dt->umur;
			$datax['email']= $dt->email;
			$datax['jk']= $dt->jk;
			$datax['telp']= $dt->telp;

			}
	   return $datax;
}
 function sum_plus($id)
 {
			$q = $this->db->query("SELECT sum(nilai) as jumlah FROM konsultasi where aksi=1 and id_pasien='".$id."'");
			foreach($q->result() as $dt)
			{
$data= $dt->jumlah;
			}
	  
	  return $data;
 }
 function sum_min($id)
 {
			$q = $this->db->query("SELECT sum(nilai) as jumlah FROM konsultasi where aksi=0 and id_pasien='".$id."'");
			foreach($q->result() as $dt)
			{
$data= $dt->jumlah;
			}
	  
	  return $data;
 }
 function gejala($id)
 {
 			$idx['id_diagnosa']= $id;
			$q = $this->db->get_where("diagnosa", $idx);
			foreach($q->result() as $dt)
			{
$data= $dt->ket;
			}
	  
	  return $data;
 }
}

		/*
	Aplikasi ini di rancang sesuai dengan data yang didapatkan dari rumah sakit terhadap gejala diagnosa penyakit leukemia, metoda yang di gunakan adalah Teorema Bayes. Aplikasi ini hanya mendeteksi berdasarkan gejala, hasil yang akurat dapat anda konsultasikan sama dokter. Terima kasih 
Segala yang berhubungan dengan aplikasi ini silahkan hubungi : Xmoensen@gmail.com
blog : http://h4nk.blogspot.com
	*/