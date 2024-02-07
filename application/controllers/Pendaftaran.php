<?php 
	class Pendaftaran extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			// $this->load->model('modelPendaftaran');
		}

		public function pendaftaran()
    {
		$data['judul'] = "Form Pendaftaran";
        $this->load->view('pendaftaran/pendaftaran',$data);
    }

		public function add_pendaftar()
		{
			$upload_image = $_FILES['image']['name'];

				if($upload_image){
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']		 = '2048';
					$config['upload_path']	 = './assets/image/pendaftar/';
					$this->load->library('upload', $config);

					if($this->upload->do_upload('image')){
						$old_image = $config['image'];
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
						'nama_pendaftar' => $this->input->post('nama_pendaftar'),
						'nik' => $this->input->post('nik'),
						'email' => $this->input->post('email'),
						'ttl' => $this->input->post('ttl'),
						'jenkel' => $this->input->post('jenkel'),
						'alamat' => $this->input->post('alamat'),
						'nohp' => $this->input->post('nohp'),
						'ket' => $this->input->post('ket'),
						'image' => $new_image,
					];
				}
			if($this->db->insert('tb_pendaftar', $data));
			redirect('home/p');
		}

    }