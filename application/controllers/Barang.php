<?php 

class Barang extends Ci_Controller{

	function index(){
		$this->load->model('model_barang');
		$judul = "Daftar Barang";
		$data['judul'] = $judul;
		$data ['barang'] = $this->model_barang->list_barang()->result();
		$this->template->load('index','list_barang', $data);
	}



	function input(){
	$this->template->load('index','input_barang');

	}

	function input_simpan(){
		$k_barang = $this->input->post('kode_barang');
		$n_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');

		$databarang = array(
			'kode_barang' => $k_barang,
			'nama_barang' => $n_barang,
			'harga' 	=> $harga
		);
		$this->db->insert('barang',$databarang);
		redirect('barang');
	}


	function edit(){
		$kode_barang = $this->uri->segment(3);
		$data['produk'] = $this->model_barang->produk($kode_barang)->row_array();
		$this->template->load('index','edit_barang',$data);
	}

	function edit_simpan(){
		$k_barang = $this->input->post('kode_barang');
		$n_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$id = $this->input->post('id');

		$databarang = array(
			'kode_barang' => $k_barang,
			'nama_barang' => $n_barang,
			'harga' 	=> $harga
		);
		$this->db->where('kode_barang', $id);
		$this->db->update('barang',$databarang);
		redirect('barang');
	}

	function delete(){
		$kode_barang = $this->uri->segment(3);
		$this->db->where('kode_barang',$kode_barang);
		$this->db->delete('barang');
		redirect('barang');
	}

}