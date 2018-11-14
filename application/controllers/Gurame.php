<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gurame extends Ci_Controller{

	function hasil(){
		$a = $this->input->post('a');
		$b= $this->input->post('b');
		$c= $this->input->post('c');
		$d= $this->input->post('d');
		$nama= $this->input->post('nama');
		$alamat= $this->input->post('alamat');
		$e= "Benih Gurame Anda Berkualitas";
		$f = "Benih Gurame Gurang Berkualitas";

		$data = array(
			'a' => $a, 
			'b' => $b, 
			'c' => $c, 
			'd' => $d, 
			'nama' => $nama, 
			'e' => $e, 
			'f' => $f, 
			'alamat' => $alamat 


		);

		// if ($a == "Lincah" && $b == "sisik yang mengkilap" && $c  == "bebas penyakit dan ukurannya relatif seragam" && $d == "100 gram/ekor") {
		// 	echo "Nama Anda $nama Alamat Anda $alamat " .$e;
		// }else{
		// 	echo $f;
		// }

		$this->template->load('index','gurame', $data);


	}


	function input_gurame(){
		$a = $this->input->post('a');
		$b= $this->input->post('b');
		$c= $this->input->post('c');
		$d= $this->input->post('d');
		$nama= $this->input->post('nama');
		$alamat= $this->input->post('alamat');

		$datagurame = array(
			'a' => $a,
			'b' => $b,
			'c' => $c,
			'd' => $d,
			'nama' => $nama,
			'alamat' => $alamat
		);
		$this->db->insert('kriteria_gurame',$datagurame);
		redirect('home');
	}
}