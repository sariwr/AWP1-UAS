<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($mess = 0)
	{
		$data = array(
			'content' => $this->my_model->GetData(),
			'message' => $mess
		);
		$this->load->view('index',$data);
	}
	
	public function add()
	{
		$data = array(
			'status' => 'Tambah',
			'nama' => '',
			'asal_sekolah' => '',
			'alamat' => '',
			'telepon' => '',
			'jurusan' => '',
			'id' => ''
		);
		$this->load->view('manipulasi_data',$data);
	}
	
	public function edit($id = 0)
	{
		$temp = $this->my_model->GetData("where id = '$id'")->result_array();
		$data = array(
			'status' => 'Edit',
			'nama' => $temp[0]['nama'],
			'asal_sekolah' => $temp[0]['asal_sekolah'],
			'alamat' => $temp[0]['alamat'],
			'telepon' => $temp[0]['telepon'],
			'jurusan' => $temp[0]['jurusan'],
			'id' => $temp[0]['id']
		);
		$this->load->view('manipulasi_data',$data);
	}
	
	public function delete($id = 0)
	{
		$result = $this->my_model->DeleteData('tb_data',array('id' => $id));
		if($result == 1){
			header("location:".base_url().'index.php/welcome/index/3');
		}else{
			echo "<h2>Operasi Hapus Data Gagal !!!</h2><br><a href='".base_url()."'>Kembali ke Halaman sebelumnya</a>";
		}
	}
	
	public function simpan()
	{
		if($_POST){
			$kode 				= $_POST['kode'];
			$nama 				= $_POST['nama'];			
			$asal_sekolah		= $_POST['asal_sekolah'];
			$alamat 			= $_POST['alamat'];
			$telepon 			= $_POST['telepon'];
			$jurusan			=$_POST['jurusan'];
			$status 			= $_POST['status'];
			
			$data = array(
				'nama' => $nama,
				'asal_sekolah' => $asal_sekolah,
				'alamat' => $alamat,
				'telepon' => $telepon,
				'jurusan' => $jurusan
			);
			if(strtolower($status) == "tambah"){
				$result = $this->my_model->InsertData('tb_data',$data);
				if($result == 1){
					header("location:".base_url().'index.php/welcome/index/1');
				}else{
					echo "<h2>Operasi Tambah Data Gagal !!!</h2><br><a href='".base_url()."'>Kembali ke Halaman sebelumnya</a>";
				}
			}else{
				$result = $this->my_model->UpdateData('tb_data',$data,array('id' => $kode));
				if($result == 1){
					header("location:".base_url().'index.php/welcome/index/2');
				}else{
					echo "<h2>Operasi Ubah Data Gagal !!!</h2><br><a href='".base_url()."'>Kembali ke Halaman sebelumnya</a>";
				}
			}
		}else{
			header('location:'.base_url());
		}
	}
}