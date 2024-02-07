<?php 
	class Pendaftar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('modelPendaftaran');
		}

		public function p()
		{
			$data['pendaftar'] = $this->db->get('tb_pendaftar')->result_array();
			$p = $this->uri->segment(3);
			$data['title'] = "Eclooth";
			$data['judul'] = "Manajemen Pendaftar";
			$data['folder'] = "pendaftar";
			if (empty($p)) {
				$p = "index";
			}
			$data['p'] = $p;
			$this->load->view('beranda',$data);
		}

		// public function add_pendaftar(){
		// 	$upload_image = $_FILES['image']['name'];

		// 		if($upload_image){
		// 			$config['allowed_types'] = 'gif|jpg|png|jpeg';
		// 			$config['max_size']		 = '2048';
		// 			$config['upload_path']	 = './assets/image/';
		// 			$this->load->library('upload', $config);

		// 			if($this->upload->do_upload('image')){
		// 				$old_image = $data['user']['image'];
		// 				if($old_image != 'default.jpg'){
		// 					unlink(FCPATH . 'assets/image/'.$old_image);
		// 				}



		// 				$new_image = $this->upload->data('file_name');
		// 				$this->db->set('image', $new_image);

		// 			}else {
		// 				echo $this->upload->display_error();
		// 			}
		// 		}
		// 		$blank_image=$this->input->post('image');
				
		// 		if($blank_image==""){
		// 	$data=[
		// 		'nama_pendaftar' => $this->input->post('nama_pendaftar'),
		// 		'nik' => $this->input->post('nik'),
		// 		'email' => $this->input->post('email'),
		// 		'ttl' => $this->input->post('ttl'),
		// 		'jenkel'=>$this->input->post('jenkel'),
        //         'alamat'=>$this->input->post('alamat'),
        //         'nohp'=>$this->input->post('nohp'),
		// 		'keterangan'=>$this->input->post('keterangan'),
		// 	];
		// }else{
		// 	$data=[
		// 		'nama_pendaftar' => $this->input->post('nama_pendaftar'),
		// 		'nik' => $this->input->post('nik'),
		// 		'email' => $this->input->post('email'),
		// 		'ttl' => $this->input->post('ttl'),
		// 		'jenkel'=>$this->input->post('jenkel'),
        //         'alamat'=>$this->input->post('alamat'),
        //         'nohp'=>$this->input->post('nohp'),
		// 		'keterangan'=>$this->input->post('keterangan'),
		// 		'image' => $new_image,
		// 	];
		// }
		// 	$this->db->insert('tb_pendaftar', $data);
		// 	redirect('pendaftar/p');
		// }

		public function edit_pendaftar(){

			$id_pendaftar = $this->input->post('id_pendaftar');
			//cek jika ada gambar
			$upload_image = $_FILES['image']['name'];

			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']		 = '2048';
				$config['upload_path']	 = './assets/image/pendaftar/';
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
					$old_image = $config['image'];
					if($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/image/pendaftar/'.$old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);

				}else {
					echo $this->upload->display_error();
				}
			}
			$blank_image=$this->input->post('image');
			
			if($blank_image==""){
				$data=[
					'id_pendaftar' => $id_pendaftar,
					'nama_pendaftar' => $this->input->post('nama_pendaftar'),
					'nik' => $this->input->post('nik'),
					'email' => $this->input->post('email'),
					'ttl' => $this->input->post('ttl'),
					'jenkel' => $this->input->post('jenkel'),
					'alamat' => $this->input->post('alamat'),
					'nohp' => $this->input->post('nohp'),
					'ket' => $this->input->post('ket')
				];
			}else{
				$data=[
					'id_pendaftar' => $id_pendaftar,
					'nama_pendaftar' => $this->input->post('nama_pendaftar'),
					'nik' => $this->input->post('nik'),
					'email' => $this->input->post('email'),
					'ttl' => $this->input->post('ttl'),
					'jenkel' => $this->input->post('jenkel'),
					'alamat' => $this->input->post('alamat'),
					'nohp' => $this->input->post('nohp'),
					'ket' => $this->input->post('ket'),
					'image' => $new_image
				];
		}
			$this->db->where('id_pendaftar', $id_pendaftar);			
			$this->db->update('tb_pendaftar', $data);
			redirect('pendaftar/p');
		}
	

		public function delete_pendaftar(){

			$id_pendaftar = $this->input->post('id_pendaftar');
			$this->db->delete('tb_pendaftar',['id_pendaftar'=>$id_pendaftar]);
			redirect('pendaftar/p');
		
		}

	}