<?php 
	class Informasi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			// $this->load->model('model`user');
		}

		public function p()
		{
			$data['informasi'] = $this->db->get('tb_informasi')->result_array();
			$p = $this->uri->segment(3);
			$data['title'] = "Arminareka | Informasi";
			$data['judul'] = "Manajemen Informasi";
			$data['folder'] = "informasi";
			if (empty($p)) {
				$p = "index";
			}
			$data['p'] = $p;
			$this->load->view('beranda',$data);
		}

		public function add_informasi(){
			$upload_image = $_FILES['image']['name'];

				if($upload_image){
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']		 = '2048';
					$config['upload_path']	 = './assets/image/';
					$this->load->library('upload', $config);

					if($this->upload->do_upload('image')){
						$old_image = $config['user']['image'];
						if($old_image != 'default.jpg'){
							unlink(FCPATH . 'assets/image/'.$old_image);
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
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'tgl_up' => $this->input->post('tgl_up'),
			];
		}else{
			$data=[
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'tgl_up' => $this->input->post('tgl_up'),
				'image' => $new_image,
			];
		}
			$this->db->insert('tb_informasi', $data);
			redirect('informasi/p');
		}

		public function edit_informasi(){

			$id_informasi = $this->input->post('id_informasi');
			//cek jika ada gambar
				$upload_image = $_FILES['image']['name'];

				if($upload_image){
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']		 = '2048';
					$config['upload_path']	 = './assets/image/';
					$this->load->library('upload', $config);

					if($this->upload->do_upload('image')){
						$old_image = $config ['user']['image'];
						if($old_image != 'default.jpg'){
							unlink(FCPATH . 'assets/image/'.$old_image);
						}

						$new_image = $this->upload->data('file_name');
						$this->db->set('image', $new_image);

					}else {
						echo $this->upload->display_error();
					}
				}

				$new_image = $this->input->post('current_image');
				$blank_image=$this->input->post('image');
				if($blank_image==""){
			$data=[
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'tgl_up' => $this->input->post('tgl_up'),
				
			];
		}else{
			$data=[
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'tgl_up' => $this->input->post('tgl_up'),
				'image' => $new_image,
			];
		}
			$this->db->where('id_informasi', $id_informasi);			
			$this->db->update('tb_informasi', $data);
			redirect('informasi/p');
		}
	
		public function delete_informasi(){

			$id_informasi = $this->input->post('id_informasi');
			$this->db->delete('tb_informasi',['id_informasi'=>$id_informasi]);
			redirect('informasi/p');
		
		}

	}