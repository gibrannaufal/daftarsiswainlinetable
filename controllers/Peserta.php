<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
	
	public function index()
		{
			$this->load->model('mahasiswa_model');
			$data['mhs'] = $this->mahasiswa_model->get();
			// $data['jml'] = $this->mahasiswa_model->jumlah();
			// $data['nilai'] = $this->mahasiswa_model->nilai();
			$this->load->view('mahasiswa/index',$data);
			
		}
	// public function tambah()
	// 	{
	// 		$this->load->model('mahasiswa_model');
	// 		$this->load->helper('form');
	// 		$this->load->view('mahasiswa/tambah');

	// 	}
	// public function aksi_tambah()
	// {
	// 	$nama = $this->input->post('nama');
	// 	$nrp = $this->input->post('nrp');
	// 	$ipk = $this->input->post('ipk');
 
	// 		$data = array
	// 		(
	// 			'nama' => $nama,
	// 			'nrp' => $nrp,
	// 			'ipk' => $ipk,
	// 		);
	// 	$this->mahasiswa_model->tambah($data,'daftar');
	// 	redirect('Mahasiswa');
	// }
	public 	function edit($id)
		{
			$this->load->model('mahasiswa_model');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nrp','NRP','required|max_length[20]|numeric');
			if ($this->form_validation->run() == FALSE) 
			{
				$data['mhs']=$this->mahasiswa_model->getByid($id);
				$this->load->view('mahasiswa/form_edit',$data);

			}
			else
			{
				$nama = $this->input->post('Nama');
				$nrp = $this->input->post('nrp');
				$telp = $this->input->post('Telp');
				$alamat = $this->input->post('Alamat');
				$jk = $this->input->post('jk');
				$Tgl = $this->input->post('Tgl');
 
 
				$data = array(
					'Nama' => $nama,
					'nrp' => $nrp,
					'Telp' => $telp,
					'Alamat' => $alamat,
					'jk' => $jk,
					'Tgl' => $Tgl,
					);
				$this->mahasiswa_model->update($id,$data);
				redirect('peserta');
			}
		}
	// public function hapus($id)
	// {
 //        $this->load->model('mahasiswa_model');
	// 	$where = array('id' => $id);
	// 	$this->mahasiswa_model->hapus($where);
	// 	redirect('Mahasiswa');
	// }

}
?>

